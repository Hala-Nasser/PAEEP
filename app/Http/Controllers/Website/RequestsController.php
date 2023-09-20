<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\StoreDonationRequest;
use App\Models\Admin;
use App\Models\CompanyRequest;
use App\Models\ContactUs;
use App\Models\Donation;
use App\Models\JobRequest;
use App\Models\Program;
use App\Models\VolunteerRequest;
use App\Notifications\NewJobRequestNotification;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    protected $data = array();

    public function createCompanyRequest()
    {
        return response()->view('website.company-request');
    }

    public function storeCompanyRequest(Request $request)
    {
        $this->validateCompanyRequest($request);
        $request_data = $request->all();
        if ($request['page_number'] == 5) {
            $request_data['registeration_certification'] = $this->storeFile($request, 'registeration_certification', 'CompanyRequest');
            $request_data['organization_structure'] = $this->storeFile($request, 'organization_structure', 'CompanyRequest');
            $is_saved = CompanyRequest::create($request_data);
            return $is_saved ? parent::successResponse() : parent::errorResponse();
        }
    }



    public function createJobRequest()
    {
        return response()->view('website.job-request');
    }

    public function storeJobRequest(Request $request)
    {
        $this->validateJobRequest($request);
        $request_data = $request->all();
        if ($request['page_number'] == 1) {
            $request_data['cv'] = $this->storeFile($request, 'cv', 'JobRequest');
            $is_saved = JobRequest::create($request_data);
            if($is_saved){
                $admin = Admin::where('email', 'hala.n.nofal@gmail.com')->first();
                $applier_fullname = $request_data['first_name'] . ' ' . $request_data['last_name'];
                $admin->notify(new NewJobRequestNotification($applier_fullname, $is_saved->id));
            }
            return $is_saved ? parent::successResponse() : parent::errorResponse();
        }
    }



    public function createVolunteerRequest()
    {
        return response()->view('website.volunteer-request');
    }

    public function storeVolunteerRequest(Request $request)
    {
        $this->validateVolunteerRequest($request);
        $request_data = $request->all();
        if ($request['page_number'] == 1) {
            $request_data['cv'] = $this->storeFile($request, 'cv', 'VolunteerRequest');
            $is_saved = VolunteerRequest::create($request_data);
            return $is_saved ? parent::successResponse() : parent::errorResponse();
        }
    }



    public function createContactUs()
    {
        return response()->view('website.contact-us');
    }

    public function storeContactUs(StoreContactUsRequest $request)
    {
        $is_saved = ContactUs::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }


    public function createDonate()
    {
        $programs = Program::all();
        return response()->view('website.donate', compact('programs'));
    }

    public function storeDonate(StoreDonationRequest $request)
    {
         \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $donor_name = $request->get('name');
        $amount = $request->get('amount');
        $two0 = "00";
        $total = "$amount$two0";

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $donor_name,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('donate'),
        ]);

        return redirect()->away($session->url);
        $is_saved = Donation::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
     public function storeFile($request, $key, $location)
    {
        if ($request->hasFile($key)) {
            $fileName = time() . "" . '.' . $request->file($key)->getClientOriginalExtension();
            $request->file($key)->storePubliclyAs($location, $fileName, ['disk' => 'public']);
            $file_name = $location . '/' . $fileName;

            // $request_data[$key] = $file_name;
            return $file_name;
        }
    }
    public function validateCompanyRequest($request)
    {
        switch ($request['page_number']) {
            case (0):
                $validated = $request->validate([
                    'name' => 'required|string|min:3',
                    'organization_type' => 'required|string',
                    'address' => 'required|string',
                    'foundation_year' => 'required|string',
                ]);
                break;
            case (1):
                $validated = $request->validate([
                    'website_url' => 'nullable|string|url',
                    'instagram_link' => 'nullable|string|url',
                    'facebook_link' => 'nullable|string|url',
                    'annual_budget' => 'required|numeric|min:0',
                    'centers_count' => 'required|numeric|min:0',
                    'centers_address' => 'nullable|string',
                ]);
                break;
            case (2):
                $validated = $request->validate([
                    'employees_count' => 'required|numeric|min:0',
                    'mi_registeration_number' => 'required|numeric',
                    'mf_registeration_number' => 'required|numeric',
                ]);
                break;
            case (3):
                $validated = $request->validate([
                    'current_projects_count' => 'nullable|numeric|min:0',
                    'main_donors' => 'nullable|string',
                    'total_employess_count' => 'nullable|string',
                ]);
                break;
            case (4):
                $validated = $request->validate([
                    'beneficiaries_nationalities' => 'nullable|string',
                    'beneficiaries_age' => 'nullable|string',
                    'main_objectives' => 'nullable|string',
                ]);
                break;
            case (5):
                $validated = $request->validate([
                    'registeration_certification' => 'required|file',
                    'organization_structure' => 'required|file',
                ]);
                break;
            default:
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
                    'phone' => 'required|regex:/^([0-9\-\+]*)$/|min:10',
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

    public function validateVolunteerRequest($request)
    {
        switch ($request['page_number']) {
            case (0):
                $validated = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'phone' => 'required|regex:/^([0-9\-\+]*)$/|min:10',
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
