<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Partner::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('partner', function ($row) {
                    return '<div class="d-flex align-items-center">
                    <a class="symbol symbol-50px">
                        <span class="symbol-label"
                            style="background-image:url( ' . Storage::url($row->image)  . ');"></span>
                    </a>
                    <div class="ms-5">
                        <a class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->getNameAttribute() . '</a>
                    </div>
                </div>';
                })
                ->addColumn('status', function ($row) {
                    return $row->getIsActiveAttribute();
                })
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/partner/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           ' . trans("general.edit") . '
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeletePartner(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'partner', 'status'])
                ->make(true);
        }

        return response()->view('dashboard.partner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.partner.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerRequest $request)
    {
        $is_saved = Partner::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return response()->view('dashboard.partner.edit', compact('partner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        $is_updated = $partner->update($request->getData());
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $is_deleted = $partner->delete();
        if ($is_deleted) {
            Storage::disk('public')->delete("$partner->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
