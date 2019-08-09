<?php

namespace App\Modules\Turma\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = ['id', 'nome', 'serie', 'sala'];

    public function alunos(){
        return $this->hasMany('App\Modules\Aluno\Models\Aluno', 'turma_id', 'id');
    }
}
