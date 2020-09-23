<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domaines = Domaine::all();
		return view('serveurs.index',compact('domaines'));
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

        $r=$request->validate([
            'nom_serveur' => 'required',
            'email' => 'required',
            'numero' => 'required',
            ]);

            $custId = $request->cust_id;
            Customer::updateOrCreate(['id' => $custId],['nom_serveur' => $request->name,'numero'=>$request->address]);
            if(empty($request->cust_id))
                $msg = 'Customer entry created successfully.';
            else
                $msg = 'Customer data is updated successfully';
            return redirect()->route('customers.index')->with('success',$msg);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function show(Domaine $domaine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function edit(Domaine $domaine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domaine $domaine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domaine $domaine)
    {
        //
    }
}
