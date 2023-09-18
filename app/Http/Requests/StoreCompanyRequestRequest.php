<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    protected $stopOnFirstFailure = true;

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        // return [
        //     'name' => 'required|string|min:3',
        //     'organization_type' => 'required|string',
        //     'address' => 'required|string',
        //     'foundation_year' => 'required|string',
        //     'website_url' => 'required|string',
        //     'instagram_link' => 'required|string',
        //     'facebook_link' => 'required|string',
        //     'annual_budget' => 'required|numeric|min:0',
        //     'centers_count' => 'required|numeric|min:0',
        //     'centers_address' => 'nullable|string',
        //     'employees_count' => 'required|numeric|min:0',
        //     'mi_registeration_number' => 'required|numeric',
        //     'mf_registeration_number' => 'required|numeric',
        //     'current_projects_count' => 'nullable|numeric|min:0',
        //     'main_donors' => 'nullable|string',
        //     'total_employess_count' => 'nullable|string',
        //     'beneficiaries_nationalities' => 'nullable|string',
        //     'beneficiaries_age' => 'nullable|string',
        //     'main_objectives' => 'nullable|string',
        //     'registeration_certification' => 'required|file',
        //     'organization_structure' => 'required|file',
        //     // 'is_read' => 'required|in:false,true'
        // ];
        // return [];

         return [
            'name' => 'required',
            'organization_type' => 'required',
            'address' => 'required',
            'foundation_year' => 'required',
            'website_url' => 'required',
            'instagram_link' => 'required',
            'facebook_link' => 'required',
            'annual_budget' => 'required',
            'centers_count' => 'required',
            'centers_address' => 'nullable',
            'employees_count' => 'required',
            'mi_registeration_number' => 'required',
            'mf_registeration_number' => 'required',
            'current_projects_count' => 'nullable',
            'main_donors' => 'nullable',
            'total_employess_count' => 'nullable',
            'beneficiaries_nationalities' => 'nullable',
            'beneficiaries_age' => 'nullable',
            'main_objectives' => 'nullable',
            'registeration_certification' => 'required',
            'organization_structure' => 'required',
            // 'is_read' => 'required|in:false,true'
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        // $data = $this;
        // $data['is_read'] = $data['is_read'] == 'true';

        if ($this->hasFile('organization_structure')) {
            $fileName = time() . "" . random_int(1, 999999) . '.' . $this->file('organization_structure')->getClientOriginalExtension();
            $this->file('organization_structure')->storePubliclyAs('CompanyRequest', $fileName, ['disk' => 'public']);
            $data['organization_structure'] = 'CompanyRequest/' . $fileName;
        }

        if ($this->hasFile('registeration_certification')) {
            $fileName = time() . "" . random_int(1, 999999) . '.' . $this->file('registeration_certification')->getClientOriginalExtension();
            $this->file('registeration_certification')->storePubliclyAs('CompanyRequest', $fileName, ['disk' => 'public']);
            $data['registeration_certification'] = 'CompanyRequest/' . $fileName;
        }
        return $data;
    }
}
