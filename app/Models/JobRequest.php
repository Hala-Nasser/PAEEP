<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class JobRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'father_name',
        'grandfather_name',
        'last_name',
        'phone',
        'email',
        'gender',
        'qualification',
        'birthday',
        'cv',
        'read_status'
    ];

    public function getIsReadAttribute()
    {
        if ($this->read_status) {
            return '<div class="badge badge-light-success" style="font-size:1.15rem">' . trans("general.read") . '</div>';
        } else {
            return '<div class="badge badge-light-primary" style="font-size:1.15rem">' . trans("general.not_read") . '</div>';
        }
    }

    // public function getGenderAttribute()
    // {
    //     return $this->gender;
    //     return trans("general. '.{{$this->gender}}.'");
    // }
}
