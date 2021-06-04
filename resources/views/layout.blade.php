<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DH</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
        <!-- Styles -->
    
    </head>
    <body class="antialiased">
        
        <div id="app">

            @yield('content')
        </div>
        <script src="/js/app.js" type="text/javascript"></script>
    </body>
</html>
