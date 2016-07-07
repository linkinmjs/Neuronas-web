<?php
namespace App\Http\Controllers;

use App\Http\Requests;

class ContactoController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return view('contactos');
    }
}
