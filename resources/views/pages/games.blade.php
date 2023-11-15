@section('seo')
    @include('meta::manager', [
   'title'         => __("messages.GAMES") ." | ".setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<img src="{{asset('assets/images/photos/photo-1.jpg')}}"  width="100%" height="500">
<section >

    <div class="container">
        @foreach($games as $game)
            <div class="row game_red_border my-10">
                <div class="col-lg-6 col-12 game_orange_bg">
                    <div class="my-3">{!! $game->body !!}</div>
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <img src="{{Voyager::image($game->image_cover)}}" width="100%"/>
                    <a href="{{route('game',["slug"=>$game->slug])}}"
                       class="readmore_btn">
                        <img src="{{asset('images/ContentMore_Button.webp')}}" width="64">
                    </a>
                </div>

            </div>
        @endforeach
    </div>


</section>
