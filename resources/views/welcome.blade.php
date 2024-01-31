<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Ventas</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-min.png') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            line-height: inherit;
            background-image: url({{ asset('assets/images/main/ventas.jpg') }});
            background-size: cover;
       
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .main-container {
            background-color: #ffffff;
            /* Color de fondo del contenedor principal */
            border: 1px solid #17AEDF;
            /* Borde global al contenedor principal */
            border-radius: 0.375rem;
            /* Borde redondeado */
            overflow: hidden;
            /* Ajustar el borde al contenido */
            padding: 1rem;
            /* Espaciado interno */
            margin-bottom: 1rem;
            /* Margen inferior */
            box-shadow: 0 0 0 15px rgba(0, 0, 0, 0.2);
            /* Sombra */
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            color: #676E8A;
            /* Color del texto */
            text-align: center;
            margin-bottom: 1rem;
        }

        .links-container {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            border-top: 2px solid #e2e8f0;
            /* Borde superior para separar del título */
            padding-top: 1rem;
            /* Espaciado interno en la parte superior */
        }

        .link-wrapper {
            margin: 0 1rem;
            overflow: hidden;
            /* Ajustar el borde al contenido */
        }

        .links {
            text-decoration: none;
            background: #17AEDF;
            color: #ffffff;
            /* Color de los enlaces */
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            display: block;
            border-radius: 10px;
            transition: color 0.4s ease-in-out; 
        }

        .links:hover {
            color: #718096;
            /* Cambia el color al pasar el ratón */
        }

        /* Efecto de hover para los botones */
        .links:hover {
            background-color: #e2e8f0;
            /* Cambia el color de fondo al pasar el ratón */
            color: #2d3748;
            /* Cambia el color del texto al pasar el ratón */
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="main-container">
            <div class="title">
                @auth
                Bienvenido al Sistema de Ventas
                @else
                Inicia sesión o Regístrate
                @endauth
            </div>

            @if (Route::has('login'))
            <div class="links-container">
                <div class="link-wrapper">
                    <a href="{{ route('login') }}" class="links">Iniciar sesión</a>
                </div>

                @if (Route::has('register'))
                <div class="link-wrapper">
                    <a href="{{ route('register') }}" class="links">Registrarse</a>
                </div>
                @endif
            </div>
            @endif
        </div>

    </div>
</body>

</html>