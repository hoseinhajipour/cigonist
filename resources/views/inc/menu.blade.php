<nav id="siteNavbar" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('index')}}">
        <img src="{{Voyager::image(setting('site.logo-white'))}}" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('games') }}">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Careers') }}">Careers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Contact') }}">Contact</a>
            </li>
        </ul>

        <!-- Language links aligned to the right -->
        <ul class="form-inline mt-2 mt-md-0 ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">En</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ko</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jp</a>
            </li>
        </ul>
    </div>
</nav>
