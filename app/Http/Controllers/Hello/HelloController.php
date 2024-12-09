<?php

namespace App\Http\Controllers\Hello;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "<h1>Hello dari Controller!</h1>";
    }

    public function hello()
    {
        $nama = "Budi";
        $data = [
            "nama" => $nama,
            "umur" => 20
        ];

        // return view('coba.hello', ["nama" => $nama]);
        return view('coba.hello', $data);
    }
}
