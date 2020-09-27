<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

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
}
