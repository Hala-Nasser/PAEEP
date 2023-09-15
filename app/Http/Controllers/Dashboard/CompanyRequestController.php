<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\CompanyRequest;
use App\Http\Requests\StoreCompanyRequestRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CompanyRequest::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    return '<a href="/dashboard/company-request/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->name . '</a>
                    ';
                })
                ->addColumn('organization_type', function($row){
                    return '<a href="/dashboard/company-request/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->organization_type . '</a>
                    ';
                })
                ->addColumn('read_status', function($row){
                    return $row->getIsReadAttribute();
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete" onclick="DeleteCompanyRequest(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'name', 'read_status', 'organization_type'])
                ->make(true);
        }

        return response()->view('dashboard.company-request.index');
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
    public function store(StoreCompanyRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyRequest $companyRequest)
    {
        if($companyRequest->read_status == 0){
            $companyRequest->update(['read_status' => '1']);
            }
            return response()->view('dashboard.company-request.show', compact('companyRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyRequest $companyRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyRequest $companyRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyRequest $companyRequest)
    {
        $is_deleted = $companyRequest->delete();
        if ($is_deleted) {
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
