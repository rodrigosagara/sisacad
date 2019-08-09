<?php

namespace App\Modules\Aluno\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = ['id', 'nome_completo', 'email', 'idade', 'turma_id', 'cadeira'];

    public function turma(){
        return $this->belongsTo('App\Modules\Turma\Models\Turma');
    }

    public function generateAlunosPorTurma(){
        $turmas = Turma::all();
        foreach($turmas as $turma){
            $turma->alunos->factory(App\Modules\Aluno\Models\Aluno::class)->create(30);
        }
    }

}
