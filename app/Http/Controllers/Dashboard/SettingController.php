<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function about()
    {
        $data = Setting::where('group', 'about')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function vision()
    {
        $data = Setting::where('group', 'vision')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function message()
    {
        $data = Setting::where('group', 'message')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function principle()
    {
        $data = Setting::where('group', 'principle')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function objective()
    {
        $data = Setting::where('group', 'objective')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function contactInfo()
    {
        $data = Setting::where('group', 'contact-info')->get();
        return view('dashboard.settings', compact('data'));
    }
    public function socialMedia()
    {
        $data = Setting::where('group', 'social_media')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function updateAbout(Request $request)
    {

        $data = Setting::where('group', 'about')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function update(UpdateSettingRequest $request)
    {

        // if($request['logo']){
        //     $this->StoreImage($request['logo']);
        // }
        // if($request['logo_icon']){
        //     $this->StoreImage($request['logo_icon']);
        // }
        // dd($request['logo']);

        $keys_for_update = array_keys($request->toArray());
        // dd($keys_for_update);
        foreach ($keys_for_update as $key) {
            $setting = Setting::where('key', $key)->first();
            if($key == "logo"){
                $setting->value = $this->StoreImage($request['logo']);
            }else{
                $setting->value = $request[$key];
            }
            $is_updated = $setting->save();
        }
        return $is_updated ? parent::successResponse() : parent::errorResponse();

    }

    public function StoreImage($image){
            $imageName = time() . "" . '.' . $image->getClientOriginalExtension();
            $image->storePubliclyAs('SettingImage', $imageName, ['disk' => 'public']);
            $image = 'SettingImage/' . $imageName;
            return $image;
    }
}
