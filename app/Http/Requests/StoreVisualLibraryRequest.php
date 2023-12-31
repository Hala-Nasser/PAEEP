<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVisualLibraryRequest extends FormRequest
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
            'title_en' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'description_en' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'image' => 'required|image',
        ];
    }

    public function getData()
    {
        $data = $this->validated();

        if ($this->hasFile('image')) {
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('VisualLibrary', $imageName, ['disk' => 'public']);
            $data['image'] = 'VisualLibrary/' . $imageName;
        }
        return $data;
    }
}
