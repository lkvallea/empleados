<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Agrega aquí tus enlaces a CSS y otros recursos -->
    <!--STYLES-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <!-- Aquí puedes colocar el encabezado de tu aplicación -->
        <h1>@yield('title')</h1>
            <!-- Aquí puedes colocar un menú de navegación -->
            <ul>
                <li><a href="/consultar">Consultar</a></li>
                <li><a href="/configurar">Configurar</a></li>
                <!-- Agrega más elementos según sea necesario -->
            </ul>
        </nav>
    </header>
    <main>
        <!-- El contenido específico de cada página se insertará aquí -->
        @yield('content')
    </main>
    <footer>
        <!-- Aquí puedes colocar el pie de página de tu aplicación -->
        <p>Prueba tecnica Luis E Valle A</p>
    </footer>
    <!-- javascripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>