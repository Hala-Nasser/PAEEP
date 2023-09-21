<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->user()->notifications;
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('id', function ($row) {

                //     return '<a class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row()->index() . '</a>
                //     ';
                // })
                ->addColumn('title', function ($row) {
                    return '<a href="/dashboard/notification/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . trans($row->data['title']) . '</a>
                    ';
                })
                ->addColumn('message', function ($row) {
                    return '<a href="/dashboard/notification/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->data['applier_fullname'] . trans($row->data['message']) . '</a>
                    ';
                })
                ->addColumn('read_at', function ($row) {
                    if ($row->read_at) {
                        return '<a class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->read_at->diffForHumans() . '</a>
                    ';
                    }
                    return '<a class="text-gray-800 text-hover-primary fs-5 fw-bolder">-</a>
                    ';
                    // return '<a href="/dashboard/notification/' . $row->id . '" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->read_at?->diffForHumans() ?? "-" . '</a>
                    // ';
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete" onclick="DeleteNotification(' . "'.$row->id.'" . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'title', 'message', 'read_at'])
                ->make(true);
        }

        return response()->view('dashboard.notification.index');
    }

    public function show(Request $request, string $id)
    {
        $notification = $request->user()->notifications->where('id', $id)->first();
        $notification->markAsRead();
        switch ($notification->type) {
            case "App\Notifications\NewJobRequestNotification":
                return redirect('/dashboard/job-request/' . $notification->data['request_id'] . '');
                break;
            case "App\Notifications\NewVolunteerRequestNotification":
                return redirect('/dashboard/volunteer-request/' . $notification->data['request_id'] . '');
                break;
            case "App\Notifications\NewCompanyRequestNotification":
                return redirect('/dashboard/company-request/' . $notification->data['request_id'] . '');
                break;
            case "App\Notifications\NewContactUsNotification":
                return redirect('/dashboard/contact-us/' . $notification->data['request_id'] . '');
                break;
            case "App\Notifications\NewDonationNotification":
                return redirect('/dashboard/donation/' . $notification->data['request_id'] . '');
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $is_deleted = $request->user()->notifications->where('id', $id)->first()->delete();
        if ($is_deleted) {
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
