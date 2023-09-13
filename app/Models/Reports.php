<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Reports extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'image',
        'file'
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
