<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompanyRequest;
use App\Models\Donation;
use App\Models\JobRequest;
use App\Models\Partner;
use App\Models\Program;
use App\Models\VolunteerRequest;

class HomeController extends Controller
{
    public function index(){
        // foreach($categories as $category){
        //     $category->sub_categories_count = SubCategory::select('*')->where('category_id',$category->id)->get()->count();
        // }

        $programs_count = Program::count();
        $donations_count = Donation::count();
        $partners_count = Partner::count();
        $company_requests_count = CompanyRequest::count();
        $job_requests_count = JobRequest::count();
        $volunteer_requests_count = VolunteerRequest::count();

        return view('dashboard.home', compact('programs_count', 'donations_count', 'partners_count', 'company_requests_count', 'job_requests_count' ,'volunteer_requests_count'));
    }
}
