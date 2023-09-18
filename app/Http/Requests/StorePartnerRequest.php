<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerRequest extends FormRequest
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
            'name_en' => 'required|string|min:3',
            'name_ar' => 'required|string|min:3',
            'website_url' => 'required|string|min:3',
            'status' => 'required|in:false,true',
            'image' => 'required|image',
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['status'] = $data['status'] == 'true';

        if ($this->hasFile('image')) {
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('Partner', $imageName, ['disk' => 'public']);
            $data['image'] = 'Partner/' . $imageName;
        }
        return $data;
    }
}
