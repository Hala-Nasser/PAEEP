<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Reports;
use App\Models\Setting;
use App\Models\VisualLibrary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        // $data = Setting::where('group', 'about')->get();
        // return response()->view('website.about', compact('data'));
        return response()->view('website.setting');

    }

    public function publicationsAndReports(){
        $reports = Reports::all();
        foreach($reports as $report){
            $report->date =  $report->created_at->format('Y-m-d');
        }
        return response()->view('website.publications_and_reports', compact('reports'));

    }

    public function visualLibrary(){
        $visual_libraries = VisualLibrary::paginate(9);
        // dd($visual_libraries);
        return response()->view('website.visual_library', compact('visual_libraries'));
    }

    public function visualLibraryDetails($id){
        $visual_library = VisualLibrary::find($id);
        // dd($visual_libraries);
        return response()->view('website.visual_library_details', compact('visual_library'));

    }
}
