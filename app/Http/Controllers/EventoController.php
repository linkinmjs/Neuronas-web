<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Evento;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        //echo Carbon::now();



        $data = $request->all();

        $fechaCarbon = $request->input('fecha');
        $horasCarbon = $request->input('hora');

        $diaCarbon = substr ($fechaCarbon,3,2);
        $mesCarbon = substr ($fechaCarbon,0,2);
        $añoCarbon = substr ($fechaCarbon,6,4);

        if(strlen($horasCarbon)== 7){
            $horasCarbon = '0'.$horasCarbon;
        }
        $horaCarbon = substr ($horasCarbon,0,2);
        $dateCarbon = Carbon::create($añoCarbon,$mesCarbon,$diaCarbon,$horaCarbon,'00','00');

        //HASTA ACA TODO OK
//        dd($dateCarbon);


        $archivo = $request->file('archivo');
        $nombreArchivo = DB::table('eventos')->orderBy('id','desc')->value('id');
        $nombreArchivo = "{$nombreArchivo}.jpg";
        $archivo->move(storage_path() . '/uploads', $nombreArchivo);
        $data['fecha'] = $dateCarbon;

        Evento::create($data);

        //dd($request->all());
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
