<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(Request $request) {
        return view('livros.index');
    }
}
