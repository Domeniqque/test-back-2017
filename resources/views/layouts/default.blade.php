<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
    <meta name="author" content="">
    <title>Wealth.life | Medical Landing Page Template</title>
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('layouts._nav')

    @yield('main')

    @include('layouts._footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>