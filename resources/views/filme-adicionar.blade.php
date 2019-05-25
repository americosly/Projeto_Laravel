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

      <form action="/filme/adicionar" method="POST">

        @csrf

        <label>Nome do Filme</label>
        <input type="text" name="title">

        <button type="submit">Adicionar Filme</button>

      </form>

    </div>

  </body>
</html>
