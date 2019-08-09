@extends('painel.layout')
@section('conteudo')
<div class="container">
    <h4>Alunos</h4>
    <div class="row">
        <form action="{{url('painel/aluno/edit?id=')}}{{$aluno->id}}" method="post" novalidate>
            @csrf
          <div class="input-field col s12 l4">
            <input type="text" name="nome_completo" id="nome_completo" class="validate" required value="{{(isset($aluno) ? $aluno->nome_completo : '')}}">
            <label for="nome_completo">Nome Completo*</label>
          </div>
          <div class="input-field col s12 l4">
            <input type="email" id="email" name="email" class="validate" value="{{(isset($aluno) ? $aluno->email : '')}}">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12 l4">
            <input type="text" id="cadeira" name="cadeira" class="validate" value="{{(isset($aluno) ? $aluno->cadeira : '')}}">
            <label for="cadeira">Cadeira</label>
          </div>
          <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12 l4">
                <input type="number" id="autocomplete-input" class="autocomplete" name="turma" id="turma" value="{{(isset($aluno) ? $aluno->turma_id : '')}}" placholder="id da turma">
                <label for="autocomplete-input">Turma</label>
                </div>
            </div>
            </div>
          </div>
          <button type="submit" class="waves-effect waves-light btn" title="Salvar"><i class="material-icons">save</i></button>
          <a href="{{url('painel/aluno/generate')}}" class="waves-effect waves-light btn" title="Gerar Alunos"><i class="material-icons">group</i></a>
        </form>
    </div>
    <div class="row">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th data-field="nome">Nome Completo</th>
                    <th data-field="email">Email</th>
                    <th data-field="turma">Turma</th>
                    <th data-field="cadeira">Cadeira</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            @if(count($alunos) > 0)
                @foreach ($alunos as $aluno)
                <tr>
                    <td>{{$aluno->nome_completo}}</td>
                    <td>{{$aluno->email}}</td>
                    <td>{{($aluno->turma) ? $aluno->turma->nome : ''}}</td>
                    <td>{{$aluno->cadeira}}</td>
                    <td><a href="<?php echo url('painel/aluno/mostrar?id=')?>{{$aluno->id}}" class="btn waves-efect"><i class="material-icons">edit</i></a></td>
                    <td><a href="<?php echo url('painel/aluno/remover?id=')?>{{$aluno->id}}" class="btn red waves-efect"><i class="material-icons">remove_circle</i></a></td>
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
      {{$alunos->links()}}
    </ul>
</div>
@endsection