<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Nexmo\Laravel\Facade\Nexmo;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;



    protected function attemptLogin(Request $request)
    {

        $result =  $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
        if( $result){
          //  auth()->user()->sendOTP();
            $admin1 = User::where('status','1')->first();
            $phone=$admin1->phone_number;

            $OTP = rand(100000,999999);
            $OTP = (string)(100000);
            //     Nexmo::message()->send([
            //     "to"   => "$phone",
           //   "from" => "NHDB2 API",
            //   "text" => "Votre Code de sécurité est $OTP "
            //   ]);
              Cache::put(['OTP' => $OTP],now()->addMinutes(1));
            return redirect(route('VerifyOtp'));
        }

        return $result;

    }






    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
