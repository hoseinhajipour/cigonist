@section('seo')
    @include('meta::manager', [
   'title'         => __("messages.games") ." | ".setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<section>
    <div class="row">
        @foreach($games as $game)
            <div class="col-12" style="background: url({{ Voyager::image($game->image_cover) }});background-size: cover;background-repeat: no-repeat">
                <div class="container p-10">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="text-white">{!! $game->body !!}</div>
                            <a href="{{route('game',["slug"=>$game->slug])}}"
                               class="btn btn-primary my-3">{{__("messages.readMore")}}</a>
                        </div>
                        <div class="col-lg-6 col-1 d-lg-block d-none"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
