<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evento;


class EventoController extends Controller
{





    public function index()
    {
        return view('eventos');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    
        // dd($request->all());
        $data = $request->all();
        Evento::create($data);
        return redirect()->to('/index');

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
