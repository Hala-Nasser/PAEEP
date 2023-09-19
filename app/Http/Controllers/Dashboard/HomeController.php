<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Partner;
use App\Models\Program;

class HomeController extends Controller
{
    public function index(){
        // $categories_count = Category::count();
        // $sub_categories_count = SubCategory::count();
        // $books_count = Book::count();
        // $categories = Category::select('*')->get();
        // foreach($categories as $category){
        //     $category->sub_categories_count = SubCategory::select('*')->where('category_id',$category->id)->get()->count();
        // }
        // dd($categories);
        // return view('dashboard.home',compact('categories_count', 'sub_categories_count', 'books_count', 'categories'));

        $programs_count = Program::count();
        $donations_count = Donation::count();
        $partners_count = Partner::count();
        return view('dashboard.home', compact('programs_count', 'donations_count', 'partners_count'));
    }
}
