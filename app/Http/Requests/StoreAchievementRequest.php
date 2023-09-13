<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAchievementRequest extends FormRequest
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
            'count' => 'required|numeric|min:0',
            'image' => 'required|image',
        ];
    }

    public function getData()
    {
        $data = $this->validated();

        if ($this->hasFile('image')) {
            $imageName = time() . "" . '.' . $this->file('image')->getClientOriginalExtension();
            $this->file('image')->storePubliclyAs('Achievement', $imageName, ['disk' => 'public']);
            $data['image'] = 'Achievement/' . $imageName;
        }
        return $data;
    }
}
