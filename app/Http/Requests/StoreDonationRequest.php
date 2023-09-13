<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonationRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'message' => 'required|string|min:0',
            'amount' => 'required|numeric|min:0',
            'program_id' => 'nullable|numeric|exists:programs,id',
            'is_agree' => 'required|in:false,true'
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['is_agree'] = $data['is_agree'] == 'true';


        return $data;
    }
}
