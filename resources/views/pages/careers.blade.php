@section('seo')
    @include('meta::manager', [
   'title'         => "careers | ".setting('site.title'),
   'description'   =>   setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon'))  ,
   'keywords'=>setting('site.keywords')
])
@endsection

<div>
    <video src="{{asset("vid/careers.mp4")}}" width="100%" autoplay="true"></video>

    <section class="container text-center text-white no_padding">
        <h2 class="h2_title">OUR VALUES</h2>
        <h2>OUR VALUES We are globally united by our shared values.</h2>
        <div class="row my-5">
            <div class="col-lg-3 col-6 gray_item">
                <div class="icon_holder">
                    <i aria-hidden="true" class="fab fa-teamspeak"></i>
                </div>

                <h2>FOR TEAMS</h2>
                <p>Create awesome websites for your team, full customizable theme that gives you unlimited
                    possibilities!</p>
            </div>
            <div class="col-lg-3 col-6 gray_item">
                <div class="icon_holder">
                    <i aria-hidden="true" class="fas fa-users"></i>
                </div>

                <h2>CREATE COMMUNITIES</h2>
                <p>Arcane gives you the power to be able to create communities where users can create and manage teams,
                    matches and tournaments.</p>
            </div>
            <div class="col-lg-3 col-6 gray_item">
                <div class="icon_holder">
                    <i aria-hidden="true" class="far fa-newspaper"></i>
                </div>

                <h2>NEWS AND BLOGS</h2>
                <p>If you aren’t interested in the community side, Arcane also allows you to create awesome pages
                    focused on news and blogs.</p>
            </div>
            <div class="col-lg-3 col-6 gray_item">
                <div class="icon_holder">
                    <i aria-hidden="true" class="fas fa-gamepad"></i>
                </div>

                <h2>GAME STUDIOS</h2>
                <p>Got a game or a project and a need a website? Create your portfolio today with Arcane, easy
                    peasy!</p>
            </div>
        </div>
    </section>
    <section class="container text-center text-white no_padding">
        <h2 class="h2_title">WHO WE ARE</h2>
        <p>
            cigonist is a premiere digital entertainment company and global publisher with worldwide locations and more
            than 4,000 employees focused on bringing extraordinary games to life for millions of fans around the world.
            Established in 1997 and headquartered in Seoul, South Korea, we quickly became a key leader in online games.
            Best known for critically acclaimed franchises including Lineage, Aion, Guild Wars, and Blade & Soul, NCSOFT
            is also one of the world’s top mobile developers with Lineage 2M occupying the #1 grossing revenue slot on
            Google Play. Our core goal is making people in this world happier by delivering games that entertain a
            globally connected audience has remained the same. Our culture is innovative, creative, collaborative and
            impactful, and we are passionate about creating the best gaming experiences for our players.
        </p>

        <div class="swiper team_swiper">
            <div class="swiper-wrapper">

                @foreach($teams as $team)
                    <div class="swiper-slide" align="center">
                        <img src="{{ Voyager::image($team->image) }}"
                             width="100%"/>
                    </div>
                @endforeach


            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!-- Initialize Swiper -->
        @push('javascript')
            <script>
                var swiper = new Swiper(".team_swiper", {
                    lazy: true,
                    autoHeight: true,
                    loop: true,
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    autoplay: {
                        delay: 5000,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        @endpush
    </section>

</div>
