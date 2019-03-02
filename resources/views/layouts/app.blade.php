<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
        <a class="navbar-brand" href="#">The American Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.show' , 'foods')}}">Food <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.show' , 'drinks')}}">Drink</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>