<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\VisualLibrary;
use Illuminate\Http\Request;

class VisualLibraryController extends Controller
{
    public function visualLibrary(){
        $visual_libraries = VisualLibrary::paginate(9);
        return response()->view('website.visual_library', compact('visual_libraries'));
    }

    public function visualLibraryDetails($slug){
        $visual_library = VisualLibrary::select('*')->where('slug',$slug)->first();
        return response()->view('website.visual_library_details', compact('visual_library'));

    }
}
