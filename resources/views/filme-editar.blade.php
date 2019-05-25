<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="container">

      @if (count($errors) > 0)
      <div class="alert alert-danger">

        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>

      </div>
      @endif

      <form action="/filme/editar/{{ $filme->id }}" method="POST">

        @csrf

        <label>Nome do Filme</label>
        <input type="text" name="title" value="{{ $filme->title }}">

        <label>Avaliação</label>
        <input type="number" name="rating" value="{{ $filme->rating }}" max="10.0" min="1.0" step="0.1">

        <button type="submit" class="btn btn-primary">Editar Filme</button>

      </form>

    </div>

  </body>
</html>
