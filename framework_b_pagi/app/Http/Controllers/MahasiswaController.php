<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    function index (Request $req){
        echo 'Testing';
    }
    function create (Request $req){
        return view ('createMahasiswa');
    }

}
