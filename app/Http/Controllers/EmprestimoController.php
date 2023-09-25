<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Emprestimo;

class EmprestimoController extends Controller
{
    
    public function index(Request $request){

        return view('emprestimos.index', ['emprestimos' => Emprestimo::with(['aluno', 'livro'])->orderBy('id', 'desc')->paginate(5)]);

    }
    

    public function create(Request $request)
    {
        return view('emprestimos.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'livro_id' => 'required',
            'aluno_id' => 'required',
        ]);

        $obj            = new Emprestimo();
        $obj->datahora  = date('Y-m-d H:i:s');
        $obj->aluno_id  = $request->aluno_id;
        $obj->livro_id  = $request->livro_id;
        $obj->save(); 

        return redirect()->route('emprestimos.index');
    }

    public function edit($id)
{
    $emprestimo = Emprestimo::findOrFail($id);

    return view('emprestimos.edit', compact('emprestimo'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'livro_id' => 'required',
        'aluno_id' => 'required',
        'datahora' => 'required',
    ]);

    $emprestimo = Emprestimo::findOrFail($id);

    $emprestimo->aluno_id = $request->aluno_id;
    $emprestimo->livro_id = $request->livro_id;
    $emprestimo->datahora = $request->datahora;
    $emprestimo->save();

    return redirect()->route('emprestimos.index');
}
public function devolver($id)
{
    $emprestimo = Emprestimo::findOrFail($id);
    $emprestimo->data_devolucao = date('Y-m-d H:i:s');
    $emprestimo->save();

    return redirect()->route('emprestimos.index');
}


public function delete($id)
{
    $emprestimo = Emprestimo::findOrFail($id);
    $emprestimo->delete();

    return redirect()->route('emprestimos.index');
}

}
