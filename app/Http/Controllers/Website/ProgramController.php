<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::paginate(12);
        return response()->view('website.programs', compact('programs'));
    }

    public function show($id){
        $program = Program::find($id);
        $other_programs = Program::where('id', '!=' , $id)->orderBy('created_at','desc')->take(5)->get();

        return response()->view('website.program_details', compact('program', 'other_programs'));
    }
}
