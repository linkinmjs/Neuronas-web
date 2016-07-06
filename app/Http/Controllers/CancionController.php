<?php
namespace App\Http\Controllers;

use App\Http\Requests;

class CancionController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return view('canciones');
    }
}
