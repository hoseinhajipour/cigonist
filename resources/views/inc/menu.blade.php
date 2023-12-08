<div>
    <nav class="menu">
        <div class="container_big">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-7 p-0" align="right">
                    <a href="/">
                        <img src="{{asset('images/menu_left.webp')}}" height="70">
                    </a>
                </div>
                <div class="col-8 d-lg-block d-none p-0 pl-60 text-center">
                    <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">

                    <a href="{{ route('games') }}"
                       class="link_menu {{ request()->is('games') ? 'active_menu' : '' }}">{{__("messages.GAMES")}}</a>
                    <a href="{{ route('blog') }}"
                       class="link_menu {{ request()->is('blog') ? 'active_menu' : '' }}">{{__("messages.BLOG")}}</a>
                    <a href="{{ route('PublishWithUs') }}"
                       class="link_menu {{ request()->is('publish-with-us') ? 'active_menu' : '' }}">{{__("messages.PUBLISH")}}</a>
                    <a href="{{ route('Careers') }}"
                       class="link_menu disabled {{ request()->is('careers') ? 'active_menu' : '' }}">{{__("messages.CAREER")}}</a>
                    <a href="{{ route('Contact') }}"
                       class="link_menu {{ request()->is('contact') ? 'active_menu' : '' }}">{{__("messages.CONTACT")}}</a>
                </div>
                <div class="col-2 d-lg-block d-none p-0 text-right pr-3 ">
                    <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">

                    <a href="#" wire:click="change('ko')"
                       class="lang_link {{$language== 'ko'? 'active_lang':''}}">KO</a>
                    <a href="#" wire:click="change('en')"
                       class="lang_link border_left {{$language== 'en'? 'active_lang':''}}">EN</a>
                    <a href="#" wire:click="change('cn')"
                       class="lang_link border_left {{$language== 'cn'? 'active_lang':''}}">CN</a>
                    <a href="#" wire:click="change('jp')"
                       class="lang_link border_left {{$language== 'jp'? 'active_lang':''}}">JP</a>
                </div>
                <div class="col-md-8 col-5 d-block d-lg-none p-0">
                    <img src="{{asset('images/menu_right.webp')}}" class="img_full" height="70">
                    <a href="#" onclick="openMenu()" class="float-right menubar_icon">
                        <i class="fa fa-bars " aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

    </nav>
</div>


<div class="mobile_menu">

    <div class="text-center my-5">
        <img src="{{asset('images/logo_only_min.webp')}}" height="70">
        <i onclick="closeMenu()" class="fa fa-times close_btn " aria-hidden="true"></i>
    </div>


    <a href="{{ route('games') }}"
       class="mobile_menu_button {{ request()->is('games') ? 'active_menu' : '' }}">{{__("messages.GAMES")}}</a>
    <a href="{{ route('blog') }}"
       class="mobile_menu_button {{ request()->is('blog') ? 'active_menu' : '' }}">{{__("messages.BLOG")}}</a>
    <a href="{{ route('PublishWithUs') }}"
       class="mobile_menu_button {{ request()->is('publish-with-us') ? 'active_menu' : '' }}">{{__("messages.PUBLISH")}}</a>
    <!--
    <a href="{{ route('Careers') }}"
       class="mobile_menu_button {{ request()->is('careers') ? 'active_menu' : '' }}">{{__("messages.CAREER")}}</a>
       -->
    <a href="{{ route('Contact') }}"
       class="mobile_menu_button {{ request()->is('contact') ? 'active_menu' : '' }}">{{__("messages.CONTACT")}}</a>

    <hr class="text-white"/>
    <div class="text-center ">
        <a href="#" wire:click="change('ko')" class="lang_link {{$language== 'ko'? 'active_lang':''}}">KO</a>
        <a href="#" wire:click="change('en')"
           class="lang_link border_left {{$language== 'en'? 'active_lang':''}}">EN</a>
        <a href="#" wire:click="change('cn')"
           class="lang_link border_left {{$language== 'cn'? 'active_lang':''}}">CN</a>
        <a href="#" wire:click="change('jp')"
           class="lang_link border_left {{$language== 'jp'? 'active_lang':''}}">JP</a>
    </div>

</div>
@push('javascript')
    <script>
        function openMenu() {
            $(".mobile_menu").fadeIn();
        }

        function closeMenu() {
            $(".mobile_menu").fadeOut();
        }
    </script>
@endpush
