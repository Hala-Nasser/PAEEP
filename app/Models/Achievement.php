<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'count',
        'image',
    ];

    public function getTitleAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }
}
