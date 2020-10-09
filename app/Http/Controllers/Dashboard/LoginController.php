<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\OTPRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminloginRequest;


class LoginController extends Controller
{

    public function verifierOTP(OTPRequest $request)
    {
        // dd(Request('otp'));
        auth()->user()->update(['isVerified' => true]);



        dd(auth()->user());
        if (Request('otp') === auth()->user()->OTP()) {

          auth()->user()->update(['isVerified' => true]);


            return redirect('/admin');
        }
    }



    public function aficheOTP()
    {

        return view('admin.login.otp');
    }




















    public function login(){
     //   return view('dashborad\auth\login');
        return view('admin.login.login');
    }



    public function postlogin(AdminloginRequest $request){

        if (auth()->guard('admin')->attempt(['email'=> $request->input("email"),'password'=>$request->input('password')])){



            dd(auth()->user()) ;
            $admin1 = Admin::where('status','1')->first();
            $phone=$admin1->phone_number;
            $OTP = rand(100000,9999999);
            Cache::put(['OTP' => $OTP],now()->addMinutes(1));
            //     Nexmo::message()->send([
           //       "to"   => "$phone",
           //       "from" => "NHDB2 API",
           //     "text" => "Votre Code de sécurité est $OTP "
          //    ]);

           return redirect()->route('otp');
           // return  view('admin.login.otp');
        }
        Session::flash('error', 'les information non valide');
        return redirect()->back()->with(['error'=>'les information non valide']);

    }

    public function logout(){
        $gaurd=$this->getGaurd();
        $gaurd->logout();
        return redirect()->route('admin.login');

    }

    private function getGaurd()
    {
        return auth('admin');
    }
}
