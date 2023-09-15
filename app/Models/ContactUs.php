<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'message',
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
}
