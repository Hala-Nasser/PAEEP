<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Donation;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Donation::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    return '<a href="/dashboard/donation/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->name . '</a>
                    ';
                })
                ->addColumn('email', function ($row) {
                    return '<a href="/dashboard/donation/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->email . '</a>
                    ';
                })
                ->addColumn('amount', function ($row) {
                    return '<a href="/dashboard/donation/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->amount . '</a>
                    ';
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete" onclick="DeleteDonation(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'amount', 'name', 'email'])
                ->make(true);
        }

        return response()->view('dashboard.donation.index');
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
    public function store(StoreDonationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        return response()->view('dashboard.donation.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        $is_deleted = $donation->delete();
        if ($is_deleted) {
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
