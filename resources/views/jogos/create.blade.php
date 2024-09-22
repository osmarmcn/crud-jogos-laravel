@extends('layout.app')

@section('title', 'CRUD-JOGOS')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                 <h1>Crie um novo jogo</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('jogos-index') }}" class="btn btn-success">Voltar</a>
            </div>


        </div>

        <hr>

        <form action="{{route('jogos-store')}}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group ">
                    <label for="nome">Nome do Jogo:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano do Jogo:</label>
                    <input type="text" class="form-control" id="ano_criacao" name="ano_criacao"
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="text" class="form-control" id="valor" name="valor">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" value="cadastrar" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

@endsection
