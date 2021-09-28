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
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <ul>
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('designs') }}">DISEÑOS</a></li>
        <li><a href="{{ route('') }}">HOME</a></li>
        <li><a href="{{ route('contact') }}">HOME</a></li>
    </ul>
    <!-- nav -->
    
    @yield('content')

    <!-- footer -->

    <!-- script -->
</body>
</html>