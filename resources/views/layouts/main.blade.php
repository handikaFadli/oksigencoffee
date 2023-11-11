<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oksigen Coffee</title>
    <!-- Logo tab browser -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" >
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link href="{{ asset('assets/fonts/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fonts/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fonts/css/solid.css') }}" rel="stylesheet" />
  </head>
  <body>
    @include('layouts.navbar')

    @yield('content')

    <!-- My JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
  </body>
</html>
