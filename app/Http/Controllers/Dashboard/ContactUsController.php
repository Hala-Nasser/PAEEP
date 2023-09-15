<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('full_name', function($row){
                    return '<a href="/dashboard/contact-us/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->full_name . '</a>
                    ';
                })
                ->addColumn('email', function($row){
                    return '<a href="/dashboard/contact-us/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->email . '</a>
                    ';
                })
                ->addColumn('is_read', function ($row) {
                    return $row->getIsReadAttribute();
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete" onclick="DeleteMessage(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'is_read', 'full_name', 'email'])
                ->make(true);
        }

        return response()->view('dashboard.contact-us.index');
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
    public function store(StoreContactUsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contact_u)
    {
        if($contact_u->read_status == 0){
        $contact_u->update(['read_status' => '1']);
        }
        return response()->view('dashboard.contact-us.show', compact('contact_u'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contact_u)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contact_u)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contact_u)
    {
        $is_deleted = $contact_u->delete();
        if ($is_deleted) {
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
