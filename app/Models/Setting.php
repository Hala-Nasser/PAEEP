<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Setting extends Model
{
    use HasFactory;

    public function getLabel(){
        if(LaravelLocalization::getCurrentLocale() == "ar"){
            return $this->label_ar;
        }else{
            return $this->label_en;
        }
    }
}
