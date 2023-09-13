<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportsRequest extends FormRequest
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
            'image' => 'required|image',
            'file' => 'required|file'
        ];
    }

    public function getData()
    {
        $data = $this->validated();

        if ($this->hasFile('image')) {
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('Report', $imageName, ['disk' => 'public']);
            $data['image'] = 'Report/' . $imageName;
        }

        if ($this->hasFile('file')) {
            $fileName = time() . "" . '.' . $this->file('file')->getClientOriginalExtension();
            $this->file('file')->storePubliclyAs('Report', $fileName, ['disk' => 'public']);
            $data['file'] = 'Report/' . $fileName;
        }
        return $data;
    }
}

