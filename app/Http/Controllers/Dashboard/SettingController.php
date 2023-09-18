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
        $group = 'about';
        return view('dashboard.settings', compact('data', 'group'));
    }

    public function vision()
    {
        $data = Setting::where('group', 'vision')->get();
        $group = 'vision';
        return view('dashboard.settings', compact('data', 'group'));
    }

    public function message()
    {
        $data = Setting::where('group', 'message')->get();
        $group = 'message';
        return view('dashboard.settings', compact('data', 'group'));
    }

    public function principle()
    {
        $data = Setting::where('group', 'principle')->get();
        $group = 'principle';
        return view('dashboard.settings', compact('data', 'group'));
    }

    public function objective()
    {
        $data = Setting::where('group', 'objective')->get();
        $group = 'objective';
        return view('dashboard.settings', compact('data', 'group'));
    }

    public function contactInfo()
    {
        $data = Setting::where('group', 'contact-info')->get();
        $group = 'contact-info';
        return view('dashboard.settings', compact('data', 'group'));
    }
    public function socialMedia()
    {
        $data = Setting::where('group', 'social_media')->get();
        $group = 'social_media';
        return view('dashboard.settings', compact('data', 'group'));
    }

    public function updateAbout(Request $request)
    {

        $data = Setting::where('group', 'about')->get();
        return view('dashboard.settings', compact('data'));
    }

    public function update(UpdateSettingRequest $request)
    {
        // dd($request);
        $validated = '';

        switch ($request['group']) {
            case ('about'):
                $validated = $request->validate([
                    'about_image' => 'nullable|image',
                    'about_title_en' => 'required|string|min:3',
                    'about_title_ar' => 'required|string|min:3',
                    'about_description_en' => 'required|string|min:3',
                    'about_description_ar' => 'required|string|min:3'
                ]);
                break;
            case ('vision'):
                $validated = $request->validate([
                    'vision_image' => 'nullable|image',
                    'vision_title_en' => 'required|string|min:3',
                    'vision_title_ar' => 'required|string|min:3',
                    'vision_description_en' => 'required|string|min:3',
                    'vision_description_ar' => 'required|string|min:3'
                ]);
                break;
            case ('message'):
                $validated = $request->validate([
                    'message_image' => 'nullable|image',
                    'message_title_en' => 'required|string|min:3',
                    'message_title_ar' => 'required|string|min:3',
                    'message_description_en' => 'required|string|min:3',
                    'message_description_ar' => 'required|string|min:3'
                ]);
                break;
            case ('principle'):
                $validated = $request->validate([
                    'principle_title_en' => 'required|string|min:3',
                    'principle_title_ar' => 'required|string|min:3',
                    'principle_description_en' => 'required|string|min:3',
                    'principle_description_ar' => 'required|string|min:3'
                ]);
                break;

            case ('objective'):
                $validated = $request->validate([
                    'objective_title_en' => 'required|string|min:3',
                    'objective_title_ar' => 'required|string|min:3',
                    'objective_description_en' => 'required|string|min:3',
                    'objective_description_ar' => 'required|string|min:3'
                ]);
                break;
            case ('contact-info'):
                $validated = $request->validate([
                    'logo' => 'nullable|image',
                    'logo_icon' => 'nullable|image',
                    'email' => 'required|email',
                    'name_en' => 'required|string|min:3',
                    'name_ar' => 'required|string|min:3',
                    'phone' => 'required|regex:/^([0-9\-\+]*)$/',
                    'address_en' => 'required|string|min:3',
                    'address_ar' => 'required|string|min:3',
                    'description_en' => 'required|string|min:3',
                    'description_ar' => 'required|string|min:3'
                ]);
                break;
            case ('social_media'):
                $validated = $request->validate([
                    'facebook' => 'required|url',
                    'instagram' => 'required|url',
                    'twitter' => 'required|url',
                ]);
                break;
            default:
        }

        if ($validated != '') {
            $keys_for_update = array_keys($request->toArray());
            // dd($keys_for_update);
            foreach ($keys_for_update as $key) {
                if ($key != 'group') {
                    $setting = Setting::where('key', $key)->first();
                    if ($key == "logo" || $key == "logo_icon" || $key == "about_image" || $key == "vision_image" || $key == "message_image") {
                        $setting->value = $this->StoreImage($request[$key]);
                    } else {
                        $setting->value = $request[$key];
                    }
                    $is_updated = $setting->save();
                }
            }
            return $is_updated ? parent::successResponse() : parent::errorResponse();
        }
    }

    public function StoreImage($image)
    {
        $imageName = time() . "" . random_int(1, 999999) . '.'  . $image->getClientOriginalExtension();
        $image->storePubliclyAs('SettingImage', $imageName, ['disk' => 'public']);
        $image = 'SettingImage/' . $imageName;
        return $image;
    }
}
