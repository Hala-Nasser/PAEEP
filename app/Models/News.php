<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'date',
        'time',
        'location_en',
        'location_ar',
        'keywords_en',
        'keywords_ar',
        'image',
        'type'
    ];

    public function getTitleAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }

    public function getDescriptionAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->description_ar;
        } else {
            return $this->description_en;
        }
    }

    public function getLocationAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->location_ar;
        } else {
            return $this->location_en;
        }
    }

    public function getKeywordsAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->keywords_ar;
        } else {
            return $this->keywords_en;
        }
    }
}
