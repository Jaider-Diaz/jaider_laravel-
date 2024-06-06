<html>

<head>
    <title> Programas - @yield('tituloso')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- As a link -->
    <nav class="navbar bg-info ">
        <div class="container-fluid navbar-nav justify-content-center"">
            <p class="navbar-brand ">Tipos de Programas</p>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
