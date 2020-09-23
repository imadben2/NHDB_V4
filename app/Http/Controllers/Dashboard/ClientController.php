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

            return datatables()->of(Client::select('*'))
                ->addColumn('action', 'admin.clients.actions')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);

        }

        return view('admin.clients.client');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        //
    }


    public function edit(Clients $clients)
    {
        //
    }


    public function update(Request $request, Clients $clients)
    {
        //
    }


    public function destroy(Clients $clients)
    {
        //
    }
}






