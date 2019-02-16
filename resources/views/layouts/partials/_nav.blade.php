<nav class="navbar position-static navbar-expand-lg navbar-light bg-white fixed-top shadow p-3 mb-5 bg-white rounded">
    <div class="container">
        <a class="navbar-brand" href="{{ action('PageController@home') }}">Laracarte</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ action('PageController@home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ action('PageController@about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Artisan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Planet
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="https://laravel.com/">Laravel.com</a>
                        <a class="dropdown-item" href="https://laravel.io/">Laravel.io</a>
                        <a class="dropdown-item" href="https://laracasts.com/">Laracast</a>
                        <a class="dropdown-item" href="https://larajobs.com/">Larajobs</a>
                        <a class="dropdown-item" href="https://laravel-news.com/">Laravel News</a>
                        <a class="dropdown-item" href="https://larachat.co/">Larachat</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Register</a>
                </li>
            </ul>


        </div>
    </div>
</nav>