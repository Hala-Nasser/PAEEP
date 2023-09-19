<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
        return response()->view('website.setting');
    }
}
