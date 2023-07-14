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
<div>


        <div class="row">

            @forelse($games as $game)
                <div class="col-lg-4 col-12">
                    <div class="card shadow my-3">
                        <a href="{{route('post',["slug"=>$game->slug])}}">
                            <img src="{{ Voyager::image($game->getThumbnail($game->image, 'cropped')) }}"
                                 class="card-img-top post_image_cover"/>
                        </a>
                        <div class="card-body text-center">
                            <b class="d-block my-3">{{$game->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</b>
                            <a href="{{route('post',["slug"=>$game->slug])}}"
                               class="orange_btn">{{__("messages.readMore")}}</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="alert alert-warning text-center">{{__("messages.notfound")}}</p>
            @endforelse
        </div>
        <div class="my-3">
            {{$games->links()}}
        </div>
</div>
