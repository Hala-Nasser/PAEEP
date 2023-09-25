<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
// use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use HasFactory,
        // HasRoles,
        Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'code',
        'expire_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getIsVerifiedAttribute()
    {
        if ($this->email_verified_at) {
            return '<div class="badge badge-light-success" style="font-size:1.15rem">Verified</div>';
        } else {
            return '<div class="badge badge-light-primary" style="font-size:1.15rem">Unverified</div>';
        }
    }



    public function notificationsByCreated()
    {
        return $this->morphMany(\Illuminate\Notifications\DatabaseNotification::class, "notifiable")
            ->orderByRaw("created_at", "asc");
    }


    public function generateCode(){
        $this->timestamps = false;
        $this->code = rand(1000, 9999);
        $this->expire_at = now()->addMinute(30);
        $this->save();
    }

    public function resetCode(){
        $this->timestamps = false;
        $this->code = null;
        $this->expire_at = null;
        $this->save();
    }
}
