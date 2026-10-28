<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel 13.X</a>
            </div>
           <ul class="nav navbar-nav">
                <li><a href="{{url("/")}}">Accueil</a></li>
                <li><a href="{{url("/apropos")}}">A propos</a></li>
                <li><a href="{{url("/services")}}">Services</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/create') }}">New product</a></li>
            </ul>
        </div>
    </nav>