<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function new()
    {
    	return view('solicitud/new');
    }

    public function new2()
    {
    	return view('solicitud/new2');
    }

    public function save()
    {    	
    	return View('solicitud/template');
    }
}
