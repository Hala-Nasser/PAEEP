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
        return [
            'name' => 'required|string|min:3|max:50',
            'organization_type' => 'required|string',
            'address' => 'required|string',
            'foundation_year' => 'required|string',
            'website_url' => 'required|string',
            'instagram_link' => 'required|string',
            'facebook_link' => 'required|string',
            'annual_budget' => 'required|numeric|min:0',
            'centers_count' => 'required|numeric|min:0',
            'centers_address' => 'nullable|string',
            'employees_count' => 'required|numeric|min:0',
            'mi_registeration_number' => 'required|numeric',
            'mf_registeration_number' => 'required|numeric',
            'current_projects_count' => 'nullable|numeric|min:0',
            'main_donors' => 'nullable|string',
            'total_employess_count' => 'nullable|string',
            'beneficiaries_nationalities' => 'nullable|string',
            'beneficiaries_age' => 'nullable|string',
            'main_objectives' => 'nullable|string',
            'registeration_certification' => 'required|file',
            'organization_structure' => 'required|file',
            'is_read' => 'required|in:false,true'
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['is_read'] = $data['is_read'] == 'true';

        if ($this->hasFile('file')) {
            $fileName = time() . "" . '.' . $this->file('file')->getClientOriginalExtension();
            $this->file('file')->storePubliclyAs('CompanyRequest', $fileName, ['disk' => 'public']);
            $data['file'] = 'CompanyRequest/' . $fileName;
        }

        return $data;
    }
}
