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
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
