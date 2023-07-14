<section>
    <div class="container">
        <div class="row">
            @forelse($games as $game)
                <div class="col-lg-3 col-12">
                    <div class="card shadow my-3">
                        <a href="{{route('post',["slug"=>$game->slug])}}">
                            <img src="{{ Voyager::image($game->getThumbnail($game->image, 'cropped')) }}"
                                 class="card-img-top post_image_cover"/>
                        </a>
                        <div class="card-body text-center">
                            <b class="d-block text-white my-3">{{$game->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</b>
                            <a href="{{route('post',["slug"=>$game->slug])}}"
                               class="btn btn-primary">{{__("messages.readMore")}}</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="alert alert-warning text-center">{{__("messages.notfound")}}</p>
            @endforelse
        </div>
    </div>
</section>
