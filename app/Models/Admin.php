<?php

namespace App\Models;


use App\Notifications\OtpNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;

class Admin extends Authenticatable
{
    protected $table = "admins";

    protected $guarded=[];
    public $timestamps=true;
    protected $fillable = [
        'name', 'email', 'password', 'phone_number'
    ];
    public function CacheOTP(){

        $OTP = rand(100000,9999999);
        Cache::put((string)['OTP' => $OTP],now()->addSecond(30));
    }


    public function OTP(){
        return Cache::get('OTP');
    }

    public function sendOTP(){

        dd($this->phone_number);
        $OTP = $this->$this->CacheOTP();
        Notification::send(request()->user(), new OTPNotification($OTP));
        //$this->notify(new OTPNotification);
        // $this->CacheOTP();

    }


    public function routeNotificationForNexmo($notification)
    {
        return $this->phone_number;
    }
}
