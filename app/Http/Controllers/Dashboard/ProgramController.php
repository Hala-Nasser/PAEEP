<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Program;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Program::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('program', function ($row) {
                    return '<div class="d-flex align-items-center">
                    <a class="symbol symbol-50px">
                        <span class="symbol-label"
                            style="background-image:url( ' . Storage::url($row->image)  . ');"></span>
                    </a>
                    <div class="ms-5">
                        <a class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->getTitleAttribute() . '</a>
                    </div>
                </div>';
                })
                ->addColumn('description', function ($row) {
                    return '<span class="fw-bolder text-mute">' . $row->getDescriptionAttribute() . '</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/program/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           '.trans("general.edit").'
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeleteProgram(' . $row->id . ',this)">
                       '.trans("general.delete").'</button>';
                })
                ->rawColumns(['action', 'program', 'description'])
                ->make(true);
        }

        return response()->view('dashboard.program.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramRequest $request)
    {
        $is_saved = Program::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return response()->view('dashboard.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        $is_updated = $program->update($request->getData());
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $is_deleted = $program->delete();
        if ($is_deleted) {
            Storage::disk('public')->delete("$program->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
