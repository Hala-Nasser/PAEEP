<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\VolunteerRequest;
use App\Notifications\NewVolunteerRequestNotification;
use Illuminate\Http\Request;

class VolunteerRequestController extends Controller
{
    public function createVolunteerRequest()
    {
        return response()->view('website.volunteer-request');
    }

    public function storeVolunteerRequest(Request $request)
    {
        $this->validateVolunteerRequest($request);
        $request_data = $request->all();
        if ($request['page_number'] == 1) {
            $request_data['cv'] = parent::storeFile($request, 'cv', 'VolunteerRequest');
            $is_saved = VolunteerRequest::create($request_data);
            if($is_saved){
                $admin = Admin::where('email', 'hala.n.nofal@gmail.com')->first();
                $admin->notify(new NewVolunteerRequestNotification($request_data['full_name'], $is_saved->id));
            }
            return $is_saved ? parent::successResponse() : parent::errorResponse();
        }
    }

    public function validateVolunteerRequest($request)
    {
        switch ($request['page_number']) {
            case (0):
                $validated = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'phone' => 'required|regex:/^([0-9\-\+\(\)\ ]*)$/|min:10',
                    'email' => 'required|email',
                    'address' => 'required|string|min:3',
                    'volunteered_before' => 'required|in:1,0',
                    'volunteer_info' => 'required_if:volunteered_before,1',
                    'have_skills' => 'required|in:1,0',
                    'skills_info' => 'required_if:have_skills,1',
                ]);
                break;
            case (1):
                $validated = $request->validate([
                    'volunteer_beginning' => 'required|date',
                    'volunteer_ending' => 'required|date',
                    'educational_experience' => 'required|string',
                    'cv' => 'required|file',
                ]);
                break;
            default:
        }
    }
}
