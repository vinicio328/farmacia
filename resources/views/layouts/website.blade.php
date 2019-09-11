<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="http://www.farmaciasgaleno.com.gt/js/bootstrap.min.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/ie10-viewport-bug-workaround.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/scale.fix.js"></script>
    <!--script src="http://www.farmaciasgaleno.com.gt/js/general.js"></script>-->
    <script src="http://www.farmaciasgaleno.com.gt/js/index.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/jquery.smartmenus.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/jquery.smartmenus.bootstrap.js"></script>

</body>
</html>
