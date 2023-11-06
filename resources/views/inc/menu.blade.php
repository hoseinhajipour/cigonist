<nav class="menu">
    <div class="row">
        <div class="col-3 p-0" align="right">
            <a href="/">
                <img src="{{asset('images/menu_left.webp')}}" height="70">
            </a>
        </div>
        <div class="col-5 p-0">
            <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">

            <a href="{{ route('games') }}" class="link_menu {{ request()->is('games') ? 'active_menu' : '' }}">{{__("messages.GAMES")}}</a>
            <a href="{{ route('blog') }}" class="link_menu {{ request()->is('blog') ? 'active_menu' : '' }}">{{__("messages.BLOG")}}</a>
            <a href="{{ route('PublishWithUs') }}"
               class="link_menu {{ request()->is('publish-with-us') ? 'active_menu' : '' }}">{{__("messages.PUBLISH")}}</a>
            <a href="{{ route('Careers') }}" class="link_menu {{ request()->is('careers') ? 'active_menu' : '' }}">{{__("messages.CAREER")}}</a>
            <a href="{{ route('Contact') }}" class="link_menu {{ request()->is('contact') ? 'active_menu' : '' }}">{{__("messages.CONTACT")}}</a>
        </div>
        <div class="col-4 p-0 text-right">
            <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">

            <a href="#" wire:click="change('ko')" class="lang_link {{$language== 'ko'? 'active_lang':''}}">KO</a>
            <a href="#" wire:click="change('en')" class="lang_link border_left {{$language== 'en'? 'active_lang':''}}">EN</a>
            <a href="#" wire:click="change('cn')" class="lang_link border_left {{$language== 'cn'? 'active_lang':''}}">CN</a>
            <a href="#" wire:click="change('jp')" class="lang_link border_left {{$language== 'jp'? 'active_lang':''}}">JP</a>
        </div>

    </div>


</nav>
