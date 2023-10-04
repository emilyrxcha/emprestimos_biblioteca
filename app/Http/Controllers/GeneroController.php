<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use DB;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){
        return view('genero.index');
    }
    public function create(){
        return view('genero.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'nome' => 'required'
        ]);
        
        $obj = new Genero();
        $obj->nome = $request->nome;
        $obj->save();
        
        return redirect()->route('genero.index');
        
    }
}