<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <div class="container">
        <nav id='menu'>
            <!-- <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label> -->
            <ul>
                <li><a id="hdrLinkToHome" class="logo" href="{{ route('home') }}"><img id="logo-header" src="images/logo_icon.png"></a></li>
                <li class="menu-main"><a href="{{ route('cv') }}">CURRICULUM</a></li>
                <li class="menu-main"><a href="{{ route('pl') }}">CARTA DE PRESENTACION</a></li>
                <li class="menu-main"><a href="{{ route('contact') }}">CONTACTO</a></li>
            </ul>
        </nav>
    </div>
    <!-- nav -->
    
    @yield('content')

    <!-- footer -->

    <!-- script -->
</body>
</html>