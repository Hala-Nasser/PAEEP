<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'title_en' => 'required|string|min:3|max:30',
            'title_ar' => 'required|string|min:3|max:30',
            'description_en' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'redirect_to' => 'nullable|string',
            'publish_date' => 'required|date',
            'image' => 'required|image',
            'status' => 'required|in:true,false'
        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['status'] = $data['status'] == 'true';

        if ($this->hasFile('image')) {
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('Slider', $imageName, ['disk' => 'public']);
            $data['image'] = 'Slider/' . $imageName;
        }
        return $data;
    }
}
