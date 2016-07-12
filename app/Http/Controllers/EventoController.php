<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Evento;
use Illuminate\Support\Facades\DB;

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
        //dd($request->all());

        

        $archivo = $request->file('archivo');
        $data = $request->all();

        Evento::create($data);
        $nombreArchivo = DB::table('eventos')->orderBy('id','desc')->value('id');
        $nombreArchivo = "{$nombreArchivo}.jpg";

        $archivo->move(storage_path() . '/uploads', $nombreArchivo);

        dd($nombreArchivo);
        return redirect()->to('/');
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
