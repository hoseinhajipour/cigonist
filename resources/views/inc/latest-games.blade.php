<section class="no_padding orange_border my-5">
    <div class="container_padding">
        <div class="row">
            <div class="col-lg-3 col-12 p-0">
                <img src="{{asset('images/games_bg.webp')}}" width="100%">
            </div>
            <div class="col-lg-9 col-12 p-10">
                <div id="cards_landscape_wrap-2">
                    <div class=" reveal">
                        <div class="row">
                            @forelse($games as $game)
                                <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3 p-1">
                                    <a href="">
                                        <div class="card-flyer">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <a href="{{route('game',["slug"=>$game->slug])}}">
                                                        <img src="{{ Voyager::image($game->image) }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="text-container">
                                                    <a href="{{route('game',["slug"=>$game->slug])}}">
                                                        <h6>{{$game->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</section>
