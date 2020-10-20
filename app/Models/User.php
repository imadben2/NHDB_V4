<?php

namespace App\Models;

use App\Notifications\OtpNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;
use Nexmo\Laravel\Facade\Nexmo;

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
    public function sendOTP()
    {
        $admin1 = User::where('status', '1')->first();
        $phone = $admin1->phone_number;
         $OTP = (string)(100000);
        //  $OTP = (string)(rand(100000, 999999));
        //   Nexmo::message()->send([
        //             "to" => "$phone",
        //        "from" => "NHDB2 API",
        //       "text" => "Votre Code de sécurité est $OTP "
        //  ]);
        Cache::put(['OTP' => $OTP], now()->addMinutes(1));
    }


    public function OTP()
    {

        return Cache::get('OTP');
    }


    public function updatea()
    {


    }


    public function routeNotificationForNexmo($notification)
    {
        return $this->phone_number;
    }
}
