<html>
    <head>
        <title>予約状況  @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        @section('sidebar')
            あなたの予約状況です
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>