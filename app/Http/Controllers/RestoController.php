<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }

    function list()
    {
        $data = Resto::paginate(10);
        return view('list', ['restaurants' => $data]);
    }

    function showAddPage()
    {
        return view('add');
    }

    function add(Request $req)
    {
        $req->validate([
            'name' => 'required | min:6',
            'email' => 'required | email',
            'address' => 'required | min:6'
        ]);
        $resto = new Resto();
        $resto->name = $req->name;
        $resto->email = $req->email;
        $resto->address = $req->address;
        $rep = $resto->save();
        if($rep){
            $req->session()->flash('success','Restaurant saved successfully');
            return redirect('/list');
        }else{
            $req->session()->flash('error','Error while saving restaurant');
            return redirect('/add');
        }

    }

    function showEditPage($id){
        $resto = Resto::find($id);
        return view('edit',['resto'=>$resto]);
    }

    function edit(Request $req)
    {
        $req->validate([
            'name' => 'required | min:6',
            'email' => 'required | email',
            'address' => 'required | min:6'
        ]);
        $resto = Resto::find($req->id);
        $resto->name = $req->name;
        $resto->email = $req->email;
        $resto->address = $req->address;
        $rep = $resto->save();
        $page = '';
        if($rep){
            $req->session()->flash('success','Restaurant edited successfully');
            return redirect('/list');
        }else{
            $req->session()->flash('error','Error while editing restaurant');
            return redirect('/edit/'.$req->id);
        }

    }

    function delete($id){
        $resto = Resto::find($id);
        $rep = $resto->delete();
        if($rep){
            Session::flash('success','Restaurant deleted successfully');
        }else{
            Session::flash('error','Error while deleting restaurant');
        }
        return redirect('/list');
    }
}
