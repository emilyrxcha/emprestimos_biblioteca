<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;
use App\Models\Livro;

class TesteController extends Controller
{
    public function teste() {
        //return 'teste';

        //return dd(Aluno::all()->first());
        /* $alunos = Aluno::all();
        $resp = '';
        foreach($alunos as $aluno) {
            $resp .= $aluno->nome.'<br>';
        }

        return $resp; */

        //dd(Aluno::with('telefones')->get());

        /* dd(Aluno::select('*', 'aluno.nome as aluno_nome')
             ->join('telefone', 'aluno.id', '=', 'telefone.aluno_id')
             ->get()); */

        //dd(Aluno::raw("SELECT * FROM aluno INNER JOIN telefone ON (telefone.aluno_id = aluno.id"));

        $teste = Aluno::all();

        if ($teste->count() > 0) {
            return 'maior que zero';
        } else {
            return 'sem aluno :/';
        }
    }
}
