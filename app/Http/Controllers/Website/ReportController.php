<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Reports;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function publicationsAndReports(){
        $reports = Reports::all();
        foreach($reports as $report){
            $report->date =  $report->created_at->format('Y-m-d');
        }
        return response()->view('website.publications_and_reports', compact('reports'));
    }
}
