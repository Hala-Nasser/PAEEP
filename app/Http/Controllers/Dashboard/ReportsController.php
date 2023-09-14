<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Reports;
use App\Http\Requests\StoreReportsRequest;
use App\Http\Requests\UpdateReportsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Reports::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('report', function ($row) {
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
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/report/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           ' . trans("general.edit") . '
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeleteReport(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'report'])
                ->make(true);
        }

        return response()->view('dashboard.report.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.report.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportsRequest $request)
    {
        $is_saved = Reports::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reports $report)
    {
        return response()->view('dashboard.report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportsRequest $request, Reports $report)
    {
        $is_updated = $report->update($request->getData());
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reports $report)
    {
        $is_deleted = $report->delete();
        if ($is_deleted) {
            Storage::disk('public')->delete("$report->image");
            Storage::disk('public')->delete("$report->file");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
