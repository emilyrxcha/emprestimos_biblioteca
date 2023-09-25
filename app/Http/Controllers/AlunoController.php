<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Emprestimo;
use App\Models\Telefone;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        return view('alunos.index', ['alunos' => Aluno::orderBy('id', 'desc')->paginate(5)]);
    }

    public function create(Request $request)
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        //return $request->all();

        $validated = $request->validate([
            'nome'      => 'required|unique:aluno|max:100',
            'matricula' => '',
            'endereco'  => 'max:80'
        ]);

        $obj            = new Aluno();
        $obj->nome      = $request->nome;
        $obj->matricula = $request->matricula;
        $obj->endereco  = $request->endereco;
        $obj->save();
        
        $telefone             = new Telefone();
        $telefone->tipo       = $request->tipo;
        $telefone->numero     = $request->numero;
        $telefone->aluno_id   = $obj->id;
        $telefone->save();

        return redirect()->route('alunos.index');
    }

    public function edit(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $telefone = Telefone::where('aluno_id', $aluno->id)->first();
        return view('alunos.edit', ['aluno' => $aluno, 'telefone' => $telefone]);
    }
    

    public function update(Request $request, $id)
{
    $aluno = Aluno::findOrFail($id);

    $aluno->nome = $request->nome;
    $aluno->matricula = $request->matricula;
    $aluno->endereco = $request->endereco;
    $aluno->save();

    $telefone = Telefone::where('aluno_id', $aluno->id)->first();
    if (!$telefone) {
        $telefone = new Telefone();
        $telefone->aluno_id = $aluno->id;
    }
    $telefone->numero = $request->numero;
    $telefone->nome = $request->tipo; // Corrigido: use $request->numero em vez de $request->telefone
    $telefone->save();

    return redirect()->route('alunos.index');
}


    public function delete(Request $request, $id)
    {
        $obj = Aluno::findOrFail($id);
        $emprestimo = Emprestimo::where('aluno_id', $obj->id)->delete();
        $telefone =  Telefone::where('aluno_id', $obj->id)->delete();
        $obj->delete();

        return redirect()->route('alunos.index');
    }
}
