<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
        'website_url',
        'status'
    ];

    public function getNameAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }

    public function getIsActiveAttribute()
    {
        if ($this->status) {
            return '<div class="badge badge-light-success" style="font-size:1.15rem">' . trans("general.active") . '</div>';
        } else {
            return '<div class="badge badge-light-primary" style="font-size:1.15rem">' . trans("general.inactive") . '</div>';
        }
    }
}
