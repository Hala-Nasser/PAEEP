<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdatePartnerRequest extends FormRequest
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
            'name_en' => 'required|string|min:3|max:30',
            'name_ar' => 'required|string|min:3|max:30',
            'website_url' => 'required|string|min:3',
            'status' => 'required|in:false,true',
            'image' => 'image',
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['status'] = $data['status'] == 'true';

        if ($this->hasFile('image')) {
            Storage::disk('public')->delete("$this->image");
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('Partner', $imageName, ['disk' => 'public']);
            $data['image'] = 'Partner/' . $imageName;
        }
        return $data;
    }
}
