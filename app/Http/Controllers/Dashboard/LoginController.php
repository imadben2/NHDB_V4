<?php

namespace App\Http\Controllers\Dashboard;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminloginRequest;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{

    public function login(){
     //   return view('dashborad\auth\login');
        return view('admin.login.login');
    }

    public function postlogin(AdminloginRequest $request){

        //dd($request);
        //validation
        //$remember_me=$request->has('remember_me')? true:false;
        if (auth()->guard('admin')->attempt(['email'=> $request->input("email"),'password'=>$request->input('password')])){
              return redirect()->route('admin.dashboard');
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
