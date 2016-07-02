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


        //  Se debera generar el ingreso de sesion para poder
        //  guardar los errores y renderizarlos por pantalla
        //  los eventos se estan guardando correctamente exceptuando por la fecha que difiere el formato

        
        // dd($request->all());
        $this->validate($request, [
            'nombre' => 'required|max:250',
            // 'descripcion' => 'required|max:400',
            // 'fecha' => 'required',
            ]);

        $data = $request->all();
        Evento::create($data);
        return redirect::back()->withErrors();
        // return redirect()->to('/index');

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
