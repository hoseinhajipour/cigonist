<section class="no_padding orange_border_topdown my-5">
    <div class="container_big bg_loop_left">
        <div class="row">
            <div class="col-lg-3 col-12 d-lg-block d-md-none d-none p-0">
                <img src="{{asset('images/games_bg.webp')}}" width="100%">
            </div>
            <div class="col-lg-9 col-12 p-10 padding_fix">

                <div class="row">
                    @foreach($games as $game)
                        <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3 position-relative">
                            <div>
                                <a href="{{route('game',["slug"=>$game->slug])}}" class="game_card">
                                    <img src="{{ Voyager::image($game->image) }}" width="100%"/>

                                </a>
                                <a href="{{route('game',["slug"=>$game->slug])}}" class="game_info">
                                    <label class="d-block">{{$game->title}}</label>
                                    <div class="d-block">More</div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>


</section>
