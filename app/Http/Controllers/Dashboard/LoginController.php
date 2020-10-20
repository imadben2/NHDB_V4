<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\OTPRequest;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminloginRequest;


class LoginController extends Controller
{

    public function verifierOTP(OTPRequest $request)
    {
      // dd(auth()->user());

      //  session(['clé' => 'login']);
     //   $valeur = session('cle');

       // dd($valeur);

        if (Request('otp') === auth()->user()->OTP()) {


            //  $request->session()->put('loginnn', 'true');
              $user = User::findOrFail(auth()->user()->id);
              $user->isVerified = true;
              $user->save();

            return redirect('/admin');
        }
        else
        {
            return back()->with('msg','your new otp is sent');
        }
    }

    public  function ResendOTp(Request $request){


        auth()->user()->sendOTP();
        return back()->with('msg','your new otp is sent');
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

    //  public function logout(){
    //    $gaurd=$this->getGaurd();
    //   $gaurd->logout();
    //   return redirect()->route('admin.login');

    //   }

    private function getGaurd()
    {
        return auth('admin');
    }
}
