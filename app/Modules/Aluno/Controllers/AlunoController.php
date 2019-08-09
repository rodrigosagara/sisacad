<?php

namespace App\Modules\Aluno\Controllers;

use Illuminate\Http\Request;
use App\Modules\Aluno\Models\Aluno;
use App\Modules\Turma\Models\Turma;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    public function index(){
        $dadosVw['alunos'] = Aluno::paginate(5);
        $turmas = Turma::all();
        $dadosVw['turmas'] = $turmas;
        return view('painel.aluno-list')->with($dadosVw);  
    }

    public function show(Request $request){
        $dadosVw['alunos'] = Aluno::paginate(5);
        $turmas = Turma::all();
        $dadosVw['turmas'] = $turmas;
        $dadosVw['aluno'] = Aluno::find($request->id);
        return view('painel.aluno-edit')->with($dadosVw);  
    }

    public function store(Request $request){
        //recebe
        $dados = $request->input();
        if($dados['nome_completo'] != null){
            //se tudo certo salva no banco
            if(!$salvar = Aluno::create($dados)){
                return redirect('painel/aluno');
            }
        }
        return redirect('painel/aluno');        
    }

    public function update(Request $request){
        //recebe
        $dados = $request->input();
        if(!$salvar = Aluno::find($request->id)->update($dados)){
            return redirect('painel/aluno');
        }
    
        return redirect('painel/aluno');
    }

    public function destroy(Request $request){
        Aluno::find($request->id)->delete();
        return redirect('painel/aluno');
    }

    public function generateAlunos(){
        try{
            $turmas = Turma::all();
            for($i = 0; $i < count($turmas); $i++){
                factory(Aluno::class, 30)->create([
                    'turma_id' => $turmas[$i]->id
                ]);
            }            
            return redirect('painel/aluno');
        }catch(\Exception $e){
            return response()->json([
                'success'=>false,
                'message'=>'Nao foi possivel gerar os alunos',
                'technicalMessage'=>$e->getMessage()
            ]);
        }
    }
}
