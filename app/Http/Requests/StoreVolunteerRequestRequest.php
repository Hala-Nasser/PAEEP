<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVolunteerRequestRequest extends FormRequest
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
        //     'full_name' => 'required|string|min:3|max:50',
        //     'phone' => 'nullable|numeric',
        //     'email' => 'required|email',
        //     'address' => 'required|string|min:3|max:50',
        //     'volunteered_before' => 'required|boolean|in:true,false',
        //     'volunteer_info' =>'nullable|string',
        //     'have_skills' => 'required|boolean|in:true,false',
        //     'skills_info' =>'nullable|string',
        //     'volunteer_beginning' => 'required|date',
        //     'volunteer_ending' => 'required|date',
        //     'educational_experience' => 'required|string',
        //     'cv' => 'required|file',
        //     'is_read' => 'required|in:false,true',

        // ];

        return [
            'full_name' => 'required',
            'phone' => 'nullable',
            'email' => 'required',
            'address' => 'required',
            'volunteered_before' => 'required',
            'volunteer_info' =>'nullable',
            'have_skills' => 'required',
            'skills_info' =>'nullable',
            'volunteer_beginning' => 'required',
            'volunteer_ending' => 'required',
            'educational_experience' => 'required',
            'cv' => 'required',

        ];
    }

    public function getData()
    {
        $data = $this->validated();
        // $data['is_read'] = $data['is_read'] == 'true';

        if ($this->hasFile('cv')) {
            $fileName = time() . "" . '.' . $this->file('cv')->getClientOriginalExtension();
            $this->file('cv')->storePubliclyAs('VolunteerRequest', $fileName, ['disk' => 'public']);
            $data['cv'] = 'VolunteerRequest/' . $fileName;
        }

        return $data;
    }
}
