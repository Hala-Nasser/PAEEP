<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateNewsRequest extends FormRequest
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
            'location_en' => 'required|string|min:3',
            'location_ar' => 'required|string|min:3',
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'image',
            'type' => 'required|string|in:"news","advertisment"',
            'keywords_en' => 'required|string',
            'keywords_ar' => 'required|string'
        ];
    }

    public function getData()
    {
        $data = $this->validated();

        if ($this->hasFile('image')) {
            Storage::disk('public')->delete("$this->image");
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('News', $imageName, ['disk' => 'public']);
            $data['image'] = 'News/' . $imageName;
        }
        return $data;
    }
}
