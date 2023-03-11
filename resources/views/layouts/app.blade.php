<html>
    <head>
        <title>Halaman - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <ul class="list-group list-group-light list-group-small">
           <li class="list-group-item">@yield('content')</li> 
        </ul>
            
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html> 

