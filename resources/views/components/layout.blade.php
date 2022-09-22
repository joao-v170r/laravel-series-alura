<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta title="description" content="Uma pagina para guarda é encontrar suas series favoritas de diversas plataformas">
    <title>{{ ucfirst($titleWindows) }} - Minhas Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!-- Importa o CSS do Laravel do bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="row page-content">    
    <header class="container-fluid ">
        <div class="div-background-image bg-opacity-75 col-12">
            <img class="img-background" >
        </div>
        <x-navbar titlePage="{{ ucfirst($titleWindows) }}"/>
    </header>
    <main class="container-fluid p-3">       
        {{ $slot }}           
    </main>
<footer>
    
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

