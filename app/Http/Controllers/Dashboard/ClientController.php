<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Datatables;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {


        if (request()->ajax()) {

            return datatables()->of(Client::select('id','nom_client','email_primaire','created_at'))
                ->addColumn('action', 'admin.clients.actions')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);

        }

        return view('admin.clients.client');
    }


    public function create()
    {
       return view('admin.clients.ajouter_client');
    }

    public function store(Request $request)
    {




        $client = new Client();

        $client->nom_client = $request->input('nom_client');
        $client->mobile_phone = $request->input('mobile_phone');
        $client->nom_contact = $request->input('nom_contact');
        $client->fonction_contact = $request->input('fonction_contact');
        $client->adresse_facturation = $request->input('adresse_facturation');
        $client->tva = $request->input('tva');
        $client->remise = $request->input('remise');
        $client->email_primaire = $request->input('email_primaire');
        $client->email_secondaire = $request->input('email_secondaire');
        $client->remarque = $request->input('remarque');


        $client->save();

        return redirect()->route('clients_index');


    }


    public function show(Clients $clients)
    {

    }


    public function edit(Clients $clients)
    {

    }


    public function update(Request $request, Clients $clients)
    {

    }


    public function destroy(Clients $clients)
    {

    }
}






