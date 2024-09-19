<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    <table class="table">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
