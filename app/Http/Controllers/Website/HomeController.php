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
        if (request('search')) {
            $news = News::where('title_en', 'like', '%' . request('search') . '%')->
            orWhere('title_ar', 'like', '%' . request('search') . '%')->
            orWhere('description_ar', 'like', '%' . request('search') . '%')->
            orWhere('description_en', 'like', '%' . request('search') . '%')
            ->paginate(9);

            return response()->view('website.news', compact('news'));

        } else {
            $current_date = Carbon::now()->toDateString('Y-m-d');
            $sliders = Slider::select('*')->where('status', 1)->where('publish_date', '<=', $current_date)->get();
            $news = News::orderBy('created_at','desc')->take(5)->get();
            $programs = Program::orderBy('created_at','desc')->take(4)->get();
            $achievements = Achievement::all();
            $partners = Partner::all();
            return response()->view('website.home', compact('sliders', 'news', 'programs', 'achievements', 'partners'));
        }

    }

}
