<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\JobRequest;
use App\Http\Requests\StoreJobRequestRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JobRequest::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    $full_name = $row->first_name . ' ' . $row->father_name . ' ' . $row->last_name;
                    return '<a href="/dashboard/job-request/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $full_name . '</a>
                    ';
                })
                ->addColumn('email', function ($row) {
                    return '<a href="/dashboard/job-request/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->email . '</a>
                    ';
                })
                ->addColumn('read_status', function ($row) {
                    return $row->getIsReadAttribute();
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete" onclick="DeleteJobRequest(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'name', 'read_status', 'email'])
                ->make(true);
        }

        return response()->view('dashboard.job-request.index');
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
    public function store(StoreJobRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobRequest $jobRequest)
    {
        if ($jobRequest->read_status == 0) {
            $jobRequest->update(['read_status' => '1']);
        }
        return response()->view('dashboard.job-request.show', compact('jobRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobRequest $jobRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobRequest $jobRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobRequest $jobRequest)
    {
        $is_deleted = $jobRequest->delete();
        if ($is_deleted) {
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
