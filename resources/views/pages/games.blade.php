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
<img src="{{asset('assets/images/photos/photo-1.jpg')}}" class="img-objectfit" width="100%" height="500">
<section>

    <div class="container">
        <div class="row">
            @foreach($games as $game)

                <div class="white_box border-red-2 shadow my-5 game_row">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <img src="{{asset("images/Service_ContentDesign_top.webp")}}" class="top_cover">
                            <img src="{{Voyager::image($game->image_cover)}}" width="100%" height="100%"/>
                        </div>
                        <div class="col-lg-6 col-12 orange_bg_service service_padding">
                            <h2>{{$game->title}}</h2>
                            <p>{!! $game->body !!}</p>
                            <a href="{{route('game',["slug"=>$game->slug])}}"
                               class="readmore_02_btn">
                                <img src="{{asset('images/ContentMore_Button.webp')}}" width="64">
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


</section>
