<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'redirect_to',
        'publish_date',
        'image',
        'status'
    ];

    public function getIsActiveAttribute()
    {
        if ($this->status) {
            return '<div class="badge badge-light-success" style="font-size:1.15rem">' . trans("general.active") . '</div>';
        } else {
            return '<div class="badge badge-light-primary" style="font-size:1.15rem">' . trans("general.inactive") . '</div>';
        }
    }

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
}
