<?php

namespace App\Modules\Turma\Controllers;

use Illuminate\Http\Request;
use App\Modules\Turma\Models\Turma;
use App\Modules\Aluno\Models\Aluno;
use App\Http\Controllers\Controller;

class TurmaController extends Controller
{
    public function index(){
        $dadosVw['turmas'] = Turma::paginate(5);
        return view('painel.turma-list')->with($dadosVw);  
    }

    public function show(Request $request){
        $dadosVw['turma'] = Turma::find($request->id);
        $dadosVw['turmas'] = Turma::paginate(5);
        return view('painel.turma-edit')->with($dadosVw);  
    }

    public function store(Request $request){
        //recebe
        $dados = $request->input();
        if($dados['nome'] != null && $dados['serie'] != null && $dados['sala'] != null){
            //se tudo certo salva no banco
            if(!$salvar = Turma::create($dados)){
                return redirect('painel/turma');
            }
        }
        return redirect('painel/turma');        
    }

    public function update(Request $request){
        //recebe
        $dados = $request->input();
        if($dados['nome'] != null && $dados['serie'] != null && $dados['sala'] != null){
            //se tudo certo salva no banco
            if(!$salvar = Turma::find($request->id)->update($dados)){
                return redirect('painel/turma');
            }
        }
        return redirect('painel/turma');
    }

    public function destroy(Request $request){
        Turma::find($request->id)->delete();
        return redirect('painel/turma');
    }
}
