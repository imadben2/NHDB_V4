<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Formul;
use Illuminate\Http\Request;

class FormulController extends Controller
{

    public function index()
    {

        if (request()->is('indexMutalise')) {
            if (request()->ajax()) {

                return datatables()->of(Formul::select('*')->where('type','=', 'mutalise'))
                    ->addColumn('action', 'admin.formules.ha.actions')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);

            }
            return view('admin.formules.mutualise.mutualise');
        }
        if (request()->is('indexHa')) {
            if (request()->ajax()) {

                return datatables()->of(Formul::select('*')->where('type','=', 'ha'))
                    ->addColumn('action', 'admin.formules.ha.actions')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);

            }
            return view('admin.formules.ha.cloud_ha');
        }
        if (request()->is('indexVps')) {
            if (request()->ajax()) {

                return datatables()->of(Formul::select('*')->where('type','=', 'vps'))

                    ->addColumn('action', 'admin.formules.ha.actions')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
            return view('admin.formules.vps.cloud_vps');
        }


    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        if (request()->is('indexHa_store')) {
            $FormuleId = $request->id;
            $server = Formul::updateOrCreate(
                [
                    'id' => $FormuleId
                ],
                [

                    'nom_formules' => $request->nom_de_La_formule,
                    'espace_disque' => $request->espace_Disque,
                    'espace_unite' => $request->unite,
                    'nombre_mail' => $request->compte_Emails,
                    'prix' => $request->prix,
                    'type' => 'ha',

                ]);
        }

        if (request()->is('Mutalise_store')) {
            $FormuleId = $request->id;
            $server = Formul::updateOrCreate(
                [
                    'id' => $FormuleId
                ],
                [

                    'nom_formules' => $request->nom_de_La_formule,
                    'espace_disque' => $request->espace_Disque,
                    'espace_unite' => $request->unite,
                    'nombre_mail' => $request->compte_Emails,
                    'prix' => $request->prix,
                    'type' => 'mutalise',

                ]);
        }

        if (request()->is('Vps_store')) {
            $FormuleId = $request->id;
            $server = Formul::updateOrCreate(
                [
                    'id' => $FormuleId
                ],
                [

                    'nom_formules' => $request->nom_de_La_formule,
                    'espace_disque' => $request->espace_Disque,
                    'espace_unite' => $request->unite,
                    'nombre_mail' => $request->compte_Emails,
                    'prix' => $request->prix,
                    'type' => 'vps',

                ]);
        }


        return Response()->json($server);
    }

    public function show(Formul $formul)
    {
        //
    }


    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $server = Formul::where($where)->first();

        return Response()->json($server);
    }


    public function update(Request $request, Formul $formul)
    {
        //
    }

    public function destroy(Request $request)
    {
        if (request()->is('indexHa_delete')) {
            $book = Formul::where('id', $request->id)->delete();

            return Response()->json($book);
        }

        if (request()->is('Mutalise_delete')) {
            $book = Formul::where('id', $request->id)->delete();

            return Response()->json($book);
        }

        if (request()->is('Vps_delete')) {
            $book = Formul::where('id', $request->id)->delete();

            return Response()->json($book);
        }


    }
}
