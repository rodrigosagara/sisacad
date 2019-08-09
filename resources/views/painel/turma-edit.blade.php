@extends('painel.layout')
@section('conteudo')
<div class="container">
    <h4>Turmas</h4>
    <div class="row">
        <form action="{{url('painel/turma/edit?id=')}}{{$turma->id}}" method="post" novalidate>
            @csrf
          <div class="input-field col s12 l4">
            <input type="text" maxlength="1" name="nome" id="nome" class="validate" placeholder="Nome da turma ex: 'A'"
            required value="{{(isset($turma)) ? $turma->nome : ''}}">
            <label for="nome">Nome*</label>
          </div>
          <div class="input-field col s12 l4">
            <input type="text" id="serie" name="serie" class="validate" required value="{{(isset($turma)) ? $turma->serie : ''}}">
            <label for="serie">Série*</label>
          </div>
          <div class="input-field col s12 l4">
            <input type="text" id="sala" name="sala" class="validate" required value="{{(isset($turma)) ? $turma->sala : ''}}">
            <label for="sala">Sala*</label>
          </div>
          <button type="submit" class="waves-effect waves-light btn" title="Salvar"><i class="material-icons">save</i></button>
        </form>
    </div>
    <div class="row">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th data-field="nome">Nome</th>
                    <th data-field="serie">Serie</th>
                    <th data-field="sala">Sala</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            @if(count($turmas) > 0)
                @foreach ($turmas as $turma)
                <tr>
                    <td>{{$turma->nome}}</td>
                    <td>{{$turma->serie}}</td>
                    <td>{{$turma->sala}}</td>
                    <td><a href="<?php echo url('painel/turma/mostrar?id=')?>{{$turma->id}}" class="btn waves-efect"><i class="material-icons">edit</i></a></td>
                    <td><a href="<?php echo url('painel/turma/remover?id=')?>{{$turma->id}}" class="btn red waves-efect"><i class="material-icons">remove_circle</i></a></td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td>Nenhum registro encontrado.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    <ul class="pagination">
      {{$turmas->links()}}
    </ul>
</div>
@endsection