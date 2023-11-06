<nav class="menu">
    <div class="row">
        <div class="col-3 p-0" align="right">
            <a href="/">
                <img src="{{asset('images/menu_left.webp')}}" height="70">
            </a>
        </div>
        <div class="col-5 p-0">
            <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">

            <a href="{{ route('games') }}" class="link_menu {{ request()->is('games') ? 'active_menu' : '' }}">GAMES</a>
            <a href="{{ route('blog') }}" class="link_menu {{ request()->is('blog') ? 'active_menu' : '' }}">BLOG</a>
            <a href="{{ route('PublishWithUs') }}"
               class="link_menu {{ request()->is('PublishWithUs') ? 'active_menu' : '' }}">PUBLISH</a>
            <a href="{{ route('Careers') }}" class="link_menu {{ request()->is('Careers') ? 'active_menu' : '' }}">CAREER</a>
            <a href="{{ route('Contact') }}" class="link_menu {{ request()->is('Contact') ? 'active_menu' : '' }}">CONTACT</a>
        </div>
        <div class="col-4 p-0 text-right">
            <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">

            <a href="#" class="lang_link">KO</a>
            <a href="#" class="lang_link border_left">EN</a>
            <a href="#" class="lang_link border_left">CN</a>
            <a href="#" class="lang_link border_left">JP</a>
        </div>

    </div>


</nav>
