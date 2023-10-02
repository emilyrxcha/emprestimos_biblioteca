<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use DB;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){

        $livros = DB::table('livro')->get();
        return view('index', ['livros' => $livros]);
    }
}
