<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequestRequest extends FormRequest
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
            'first_name' => 'required|string|min:3|max:30',
            'father_name'=> 'required|string|min:3|max:30',
            'grandfather_name'=> 'required|string|min:3|max:30',
            'last_name'=> 'required|string|min:3|max:30',
            'phone' => 'nullable|numeric',
            'email' => 'required|email',
            'gender' => 'required|string|in:male,female',
            'qualification' => 'required|string',
            'birthday' => 'required|date',
            'cv' => 'required|file',
            'is_read' => 'required|in:false,true'
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['is_read'] = $data['is_read'] == 'true';

        if ($this->hasFile('file')) {
            $fileName = time() . "" . '.' . $this->file('file')->getClientOriginalExtension();
            $this->file('file')->storePubliclyAs('VolunteerRequest', $fileName, ['disk' => 'public']);
            $data['file'] = 'VolunteerRequest/' . $fileName;
        }

        return $data;
    }
}
