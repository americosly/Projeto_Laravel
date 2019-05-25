<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="container">

      <p>Nome do Filme: {{ $filme->title }}</p>
      <p>Rating: {{ $filme->rating }}</p>
      <p>Duração: {{ $filme->length }}</p>

      @isset($filme->genero)
      <p>Gênero: {{ $filme->genero->nameComRanking() }}</p>
      @else
      <p>Gênero: Nenhum gênero Informado.</p>
      @endisset

      {{ $filme->atores}}

    </div>

  </body>
</html>
