<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="container">

      <h1>Lista de Filmes</h1>

      <a href="/filme/adicionar">+ Novo Filme</a>

      <ul class="list-group">

        @foreach($filmes as $filme)

        <li class="list-group-item">
          <a href="/filmes/{{ $filme->id }}">
            {{ $filme->titleComRating() }}
          </a>

          <a href="/filme/editar/{{$filme->id }}" class="btn btn-primary btn-sm">Editar</a>

          <a href="/filme/excluir/{{$filme->id }}" class="btn btn-danger btn-sm">Excluir</a>

        </li>

        @endforeach

        {{ $filmes->links() }}

      </ul>

    </div>

  </body>
</html>
