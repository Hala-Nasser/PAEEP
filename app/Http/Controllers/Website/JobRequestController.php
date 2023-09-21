<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\JobRequest;
use App\Notifications\NewJobRequestNotification;
use Illuminate\Http\Request;

class JobRequestController extends Controller
{
    public function createJobRequest()
    {
        return response()->view('website.job-request');
    }

    public function storeJobRequest(Request $request)
    {
        $this->validateJobRequest($request);
        $request_data = $request->all();
        if ($request['page_number'] == 1) {
            $request_data['cv'] = parent::storeFile($request, 'cv', 'JobRequest');
            $is_saved = JobRequest::create($request_data);
            if($is_saved){
                $admin = Admin::where('email', 'hala.n.nofal@gmail.com')->first();
                $applier_fullname = $request_data['first_name'] . ' ' . $request_data['last_name'];
                $admin->notify(new NewJobRequestNotification($applier_fullname, $is_saved->id));
            }
            return $is_saved ? parent::successResponse() : parent::errorResponse();
        }
    }


    public function validateJobRequest($request)
    {
        switch ($request['page_number']) {
            case (0):
                $validated = $request->validate([
                    'first_name' => 'required|string|min:3|max:30',
                    'father_name' => 'required|string|min:3|max:30',
                    'grandfather_name' => 'required|string|min:3|max:30',
                    'last_name' => 'required|string|min:3|max:30',
                    'phone' => 'required|regex:/^([0-9\-\+\(\)\ ]*)$/|min:10',
                    'email' => 'required|email',
                    'gender' => 'required|string|in:male,female',
                    'qualification' => 'required|string|min:3',
                ]);
                break;
            case (1):
                $validated = $request->validate([
                    'birthday' => 'required|date',
                    'cv' => 'required|file',
                ]);
                break;
            default:
        }
    }
}
