<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Cviebrock\EloquentSluggable\Sluggable;


class News extends Model
{
    use HasFactory;
    use Sluggable;

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
        'type',
        'short_description_en',
        'short_description_ar',

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

    public function getShortDescriptionAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->short_description_ar;
        } else {
            return $this->short_description_en;
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

    public function sluggable(): array
    {
        return [
            'slug' =>
            [
                'source' => 'title_en'
            ]
        ];
    }
}
