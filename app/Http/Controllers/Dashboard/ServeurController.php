<?php

namespace App\Http\Controllers\Dashboard;

use Datatables;
use App\Http\Controllers\Controller;
use App\Models\Serveur;
use Illuminate\Http\Request;
class ServeurController extends Controller
{

    public function index()
    {

        if(request()->ajax()) {
            return datatables()->of(Serveur::select('*'))
                ->addColumn('action', 'server-actions')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.serveur.server_index');
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
     * @param  \App\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function show(Serveur $serveur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function edit(Serveur $serveur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serveur $serveur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serveur $serveur)
    {
        //
    }
}
