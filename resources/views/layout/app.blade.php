<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Locadora</title>

</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index.locadora')}}">Locadora</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('create.locadora')}}">Cadastrar filme</a>
            </li>
          </ul>
    </div>
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif
    <div class="container">
        @yield('conteudo')
    </div>
</body>
</html>