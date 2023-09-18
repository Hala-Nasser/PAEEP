<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function createCompanyRequest(){
        return response()->view('website.company-request');
    }

    public function storeCompanyRequest(){

    }

    public function createJobRequest(){
        return response()->view('website.job-request');
    }

    public function storeJobRequest(){

    }

    public function createVolunteerRequest(){
        return response()->view('website.volunteer-request');
    }

    public function storeVolunteerRequest(){

    }
}
