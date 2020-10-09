<?php

namespace App\Models;

use App\Notifications\OtpNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sendOTP(){

        //$OTP = rand(100000,9999999);
        $OTP = "9999999";
        Cache::put((string)['OTP' => "9999999"],now()->addMinutes(30));
     //   Cache::put('OTP',$OTP);
     //   Notification::send(request()->user(), new OTPNotification($OTP));
        //$this->notify(new OTPNotification);
        // $this->CacheOTP();

    }


    public function OTP(){

        return Cache::get('OTP');
    }




    public function routeNotificationForNexmo($notification)
    {
        return $this->phone_number;
    }
}
