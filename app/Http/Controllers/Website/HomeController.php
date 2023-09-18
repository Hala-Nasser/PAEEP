<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\News;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $current_date = Carbon::now()->toDateString('Y-m-d');
        $sliders = Slider::select('*')->where('status', 1)->where('publish_date', '<=', $current_date)->get();
        $news = News::orderBy('created_at','desc')->take(5)->get();
        $programs = Program::orderBy('created_at','desc')->take(4)->get();
        $achievements = Achievement::all();
        $partners = Partner::all();
        return response()->view('website.home', compact('sliders', 'news', 'programs', 'achievements', 'partners'));
    }
}
