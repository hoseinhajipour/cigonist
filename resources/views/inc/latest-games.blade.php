<section>
    <div id="cards_landscape_wrap-2">
        <div class="container reveal">
            <div class="row">
                @forelse($games as $game)
                    <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
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


</section>
