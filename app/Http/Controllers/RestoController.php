<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function list(){
        $data = Resto::paginate(10);
        return view('list', ['restaurants'=>$data]);
    }
}
