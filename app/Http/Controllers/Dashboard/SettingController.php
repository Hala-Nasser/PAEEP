<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

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

}
