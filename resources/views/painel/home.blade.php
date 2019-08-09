@extends('painel.layout')
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="card blue lighten-1">
            <div class="card-content white-text">
                <span class="card-title"><span class="white-text"><i class="material-icons">info</i> Bem vindo(a) ao nosso painel.</span></span>
                <p>Como de costume informamos abaixo as melhores turmas com seus respectivos alunos, que 
                participarão da competição anual dos jogos de lógica. Confira se você foi convocado!</p>
            </div>
        </div>
        <table class="bordered">
            <thead>
                <tr>
                    <th data-field="nome">Turma</th>
                    <th data-field="serie">Serie</th>
                    <th data-field="sala">Sala</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turmas as $turma)
                <tr>
                    <td>{{$turma->nome}}</td>
                    <td>{{$turma->serie}}</td>
                    <td>{{$turma->sala}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection