<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">

    {{-- Aos Animation --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    {{-- Tailwind CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>VR Lab - SMK | {{ $title }} </title>
</head>

<body class="font-montserrat">
    @include('partials.navbar')
    @yield('container')

    @include('partials.footer')

    {{-- JavaScript --}}
    <script src="js/script.js"></script>

    {{-- Aos Animation --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
