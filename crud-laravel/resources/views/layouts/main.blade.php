<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="p-">

        <header class="mb-4 ">
            <nav class="d-flex justify-content-end custom-bg-indigo">
                <a class="m-3 custom-txt-white text-decoration-none" href="{{route('retorna_tela_um')}}"> Adicionar Registro (tela 1)</a>
                <a class="m-3 custom-txt-white text-decoration-none" href="{{route('retorna_tela_dois')}}"> Editar Registros (tela 2)</a>
            </nav>
        </header>
        
       <main class="h-80 d-flex flex-column align-items-center">
            <section class="w-75 d-flex flex-column align-items-center">
                @yield('content')
            </section>
       </main>
             
        <footer>
            <p> Crud Basico em Laravel </p>
        </footer>
    </body>
</html>
