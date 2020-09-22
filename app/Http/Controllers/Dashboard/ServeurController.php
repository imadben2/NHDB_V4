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

        if (request()->ajax()) {
            return datatables()->of(Serveur::select('*'))
                ->addColumn('action', 'admin.serveur.actions')
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

    public function store(Request $request)
    {
        $ServerId = $request->id;

        $server = Serveur::updateOrCreate(
            [
                'id' => $ServerId
            ],
            [
                'nom_serveur' => $request->nom_serveur,
                'numero' => $request->numero_server
            ]);
        return Response()->json($server);
    }


    public function show(Serveur $serveur)
    {
        //
    }


    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $server = Serveur::where($where)->first();

        return Response()->json($server);
    }

    public function update(Request $request, Serveur $serveur)
    {
        //
    }


    public function destroy(Request $request)
    {
        $book = Serveur::where('id', $request->id)->delete();

        return Response()->json($book);
    }
}
