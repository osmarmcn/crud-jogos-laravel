@extends('layout.app')

@section('title', 'CRUD-JOGOS')


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1>Lista de jogos</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('jogos-create') }}" class="btn btn-primary">Novo jogo</a>
        </div>
    </div>



<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Criação</th>
        <th scope="col">valor</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jogos as $jogo)
      <tr>
        <th >{{$jogo->id}}</th>
        <th>{{$jogo->nome}}</th>
        <th>{{$jogo->categoria}}</th>
        <th>{{$jogo->ano_criacao}}</th>
        <th>{{$jogo->valor}}</th>
        <th>
            <a href="{{ route('jogos-edit', $jogo->id) }}" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                  </svg>
            </a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
