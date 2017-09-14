<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
    <meta name="author" content="">
    <title>Wealth.life | Medical Landing Page Template</title>
    <!-- Bootstrap Core CSS -->
    {{--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="css/style.css" rel="stylesheet" type="text/css">--}}
    {{--<link rel="stylesheet" href="css/font-awesome.css" type="text/css">--}}
    {{--<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>--}}
    <!-- your favicon icon link -->
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('layouts._nav')

    @yield('main')

    @include('layouts._footer')

    <!-- Core JavaScript Files -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')

    <script>
        $("#owl-demo").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
    </script>
</body>
</html>