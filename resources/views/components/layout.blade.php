<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!-- Importa o CSS do Laravel do bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>    
<div class="">
    <div class="div-background-image">
        <img class="img-background" src="{{ asset('img/Cup.png') }}" alt="imagen de fundo">
    </div>
    <nav class="navbar p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <h3 class="display-5">
                Netflix Clone
                <small class="text-white">{{ $title }}</small>
            </h3>
            </a>
        </div>
    </nav>
    <div class="container d-flex justify-content-md-center">
        {{ $slot }}   
    </div>
</div>
</body>
</html>

