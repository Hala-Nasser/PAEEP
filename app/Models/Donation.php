<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'program_id',
        'amount',
        'message',
        'is_agree',
    ];

    public function getIsActiveAttribute()
    {
        if ($this->is_agree) {
            return '<div class="badge badge-light-success" style="font-size:1.15rem">' . trans("general.agree") . '</div>';
        } else {
            return '<div class="badge badge-light-primary" style="font-size:1.15rem">' . trans("general.disagree") . '</div>';
        }
    }
}
