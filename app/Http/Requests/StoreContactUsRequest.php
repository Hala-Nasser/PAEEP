<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsRequest extends FormRequest
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
            'full_name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|string|min:0',
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        return $data;
    }
}
