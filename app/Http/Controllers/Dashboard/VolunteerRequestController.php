<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\VolunteerRequest;
use App\Http\Requests\StoreVolunteerRequestRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class VolunteerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = VolunteerRequest::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    return '<a href="/dashboard/volunteer-request/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->full_name . '</a>
                    ';
                })
                ->addColumn('email', function($row){
                    return '<a href="/dashboard/volunteer-request/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->email . '</a>
                    ';
                })
                ->addColumn('read_status', function($row){
                    return $row->getIsReadAttribute();
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete" onclick="DeleteVolunteerRequest(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'name', 'read_status', 'email'])
                ->make(true);
        }

        return response()->view('dashboard.volunteer-request.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVolunteerRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VolunteerRequest $volunteerRequest)
    {
        if ($volunteerRequest->read_status == 0) {
            $volunteerRequest->update(['read_status' => '1']);
        }
        return response()->view('dashboard.volunteer-request.show', compact('volunteerRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VolunteerRequest $volunteerRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VolunteerRequest $volunteerRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VolunteerRequest $volunteerRequest)
    {
        $is_deleted = $volunteerRequest->delete();
        if ($is_deleted) {
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
