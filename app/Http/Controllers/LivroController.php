<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function index(Request $request) {
        return view('livros.index');
    }

    public function create(Request $request) {
        return view('livros.create');
    }

    public function store(Request $request) {
        //return $request->all();

        $validated = $request->validate([
            'nome'      => 'required|unique:livro|max:100',
            'autor' => 'required',
            'isbn'  => 'max:80'
        ]);

        $obj            = new Livro();
        $obj->nome      = $request->nome;
        $obj->autor     = $request->autor;
        $obj->isbn      = $request->isbn;
        $obj->save();

        return redirect()->route('livros.index');
    }

    public function update(Request $request, $id) {

        $obj            = Livro::findOrFail($id);
        $obj->nome      = $request->nome;
        $obj->autor     = $request->autor;
        $obj->isbn      = $request->isbn;
        $obj->save();

        return redirect()->route('livros.index');
    }

    public function delete(Request $request, $id) {
        $obj = Livro::findOrFail($id);
        $obj->delete();

        return redirect()->route('livros.index');
    }

    public function edit(Request $request, $id) {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', ['livro' => $livro]);
    }
}
