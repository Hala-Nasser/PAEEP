<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\News;
use DateTime;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(9);
        return response()->view('website.news', compact('news'));
    }

    public function show($id){
        $news = News::find($id);
        $time = new DateTime($news->time);
        $news->time =  $time->format('g:i A');
        $latest_news = News::where('id', '!=' , $id)->orderBy('created_at','desc')->take(5)->get();
        foreach($latest_news as $latest){
        $time = new DateTime($latest->time);
        $latest->time =  $time->format('g:i A');
        }
        return response()->view('website.news_details', compact('news', 'latest_news'));
    }
}
