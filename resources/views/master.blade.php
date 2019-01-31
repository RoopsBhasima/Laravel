<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="css/app.css" rel="stylesheet" type="text/css"/>
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <script src="myscripts.js"></script>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
            

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>