<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\CompanyRequest;
use App\Notifications\NewCompanyRequestNotification;
use Illuminate\Http\Request;

class CompanyRequestController extends Controller
{
    public function createCompanyRequest()
    {
        return response()->view('website.company-request');
    }

    public function storeCompanyRequest(Request $request)
    {
        $this->validateCompanyRequest($request);
        $request_data = $request->all();
        if ($request['page_number'] == 5) {
            $request_data['registeration_certification'] = parent::storeFile($request, 'registeration_certification', 'CompanyRequest');
            $request_data['organization_structure'] = parent::storeFile($request, 'organization_structure', 'CompanyRequest');
            $is_saved = CompanyRequest::create($request_data);
            if($is_saved){
                $admin = Admin::where('email', 'hala.n.nofal@gmail.com')->first();
                $admin->notify(new NewCompanyRequestNotification($request_data['name'], $is_saved->id));
            }
            return $is_saved ? parent::successResponse() : parent::errorResponse();
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

}
