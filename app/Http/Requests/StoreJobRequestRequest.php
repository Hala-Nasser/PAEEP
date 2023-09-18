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
        return[];
    }

    public function getData($data)
    {
        if ($this->hasFile('cv')) {
            $fileName = time() . "" . '.' . $this->file('cv')->getClientOriginalExtension();
            $this->file('cv')->storePubliclyAs('JobRequest', $fileName, ['disk' => 'public']);
            $data['cv'] = 'JobRequest/' . $fileName;
        }
        return $data;
    }
}
