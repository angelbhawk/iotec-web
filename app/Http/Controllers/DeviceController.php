<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function mostrar($id)
    {
        return view('dashboard',['did'=>$id]);
    }
}
