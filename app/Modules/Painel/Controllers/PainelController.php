<?php

namespace App\Modules\Painel\Controllers;

use Illuminate\Http\Request;
use App\Modules\Turma\Models\Turma;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index(){
        $viewDados['turmas'] = Turma::all();
        return view('painel.home')->with($viewDados);
    }
}
