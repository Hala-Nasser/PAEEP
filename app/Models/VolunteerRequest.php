<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'address',
        'volunteered_before',
        'volunteer_info',
        'have_skills',
        'skills_info',
        'volunteer_beginning',
        'volunteer_ending',
        'educational_experience',
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

    // public function getVolunteeredBeforeAttribute()
    // {
    //     if ($this->volunteered_before) {
    //         return trans("general.yes");
    //     } else {
    //         return trans("general.no");
    //     }
    // }

    // public function getHaveSkillsAttribute()
    // {
    //     if ($this->have_skills) {
    //         return trans("general.yes");
    //     } else {
    //         return trans("general.no");
    //     }
    // }
}
