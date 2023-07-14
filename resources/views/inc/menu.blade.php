<nav id="siteNavbar"
     class="site-navbar site-navbar-transparent navbar navbar-expand-lg navbar-dark bg-gray-800 shadow-dark-lg fixed-top py-2">

    <a class="navbar-brand" href="{{route('index')}}">
        <img src="{{Voyager::image(setting('site.logo-white'))}}" alt=""
             class="navbar-brand-img navbar-brand-img-light">
        <img src="{{Voyager::image(setting('site.logo-dark'))}}" alt="" class="navbar-brand-img navbar-brand-img-dark">
    </a>

    <button class="navbar-toggler-alternative" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="siteNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-alternative-icon">
          <span></span>
        </span>
    </button>

    <div class="navbar-collapse collapse" id="navbarCollapse">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('OurSolution')}}">OurSolution</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('WhoWeAre')}}">Who we are</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('games')}}">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Careers')}}">Careers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('PublishWithUs')}}">PublishWithUs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Artstation')}}">Artstation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Contact')}}">Contact</a>
            </li>
        </ul>

    </div>
</nav>
