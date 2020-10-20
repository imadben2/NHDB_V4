<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Mail\Registered;
use App\Models\Admin;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Client::select('*'))
                ->addColumn('action', 'admin.clients.actions')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);

        }
        return view('admin.dashboard.index');
    }

    public function retour()
    {
        return back();
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Admin $admin)
    {
        //
    }


    public function edit(Admin $admin)
    {
        //
    }


    public function update(Request $request, Admin $admin)
    {
        //
    }



    public function destroy(Admin $admin)
    {
        //
    }




    protected function test_envoi_email(Request $request)
    {


       // Mail::to($user)->send(new Registered());
        $Client = Client::findOrFail(4);


        foreach (['imadebensotmi2015@gmail.com'] as $recipient) {
            Mail::to($recipient)->send(new Registered($Client));

        }

        //  $admins = User::whereAdmin(true)->get();
        //  foreach($admins as $admin) {
            // Là on prévoira de notifier les administrateurs
            //  }
        //return redirect(route('adresses.create'))->with('message', config('messages.registered'));
    }

}
