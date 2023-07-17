@section('seo')
    @include('meta::manager', [
   'title'         => setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<div>
    <section id="home" class="py-9 py-lg-10 min-vh-75 d-flex">
        <div class="overlay overlay-advanced d-flex align-items-center">
            <div class="overlay-inner bg-image-holder bg-cover">
                <img src="assets/images/photos/photo-1.jpg" alt="">
            </div>
            <div class="overlay-inner overlay-video">
                <video autoplay muted loop>
                    <source src="storage/{{ json_decode(setting('site.video_intro'))[0]->download_link}}" type="video/mp4">
                </video>
            </div>
            <div class="overlay-inner bg-gray-900 opacity-90"></div>
        </div>
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto text-center text-white">

                    <p class="h5 mb-5">Welcome</p>
                    <h1 class="mb-5">
                        I Am <span class="font-weight-bold" data-toggle="typed" data-options='{"strings": ["Amanda Watt", "UI/UX Designer", "Photographer"]}'></span>
                    </h1>
                    <p class="mb-7">I’m Amanda Malat a marketing specialist with over five years work experience. Donec
                        sed fringilla lectus, non vulputate orci. Integer id libero euismod, interdum ligula vel,
                        porttitor magna.</p>
                    <a href="#about-me" class="btn btn-soft-white scrollto ml-md-3 d-block d-md-inline-block">Learn
                        more</a>

                </div>
            </div>
        </div>
        <div class="mouse-icon text-gray-600"></div>
    </section>
    <livewire:inc.latest-games/>
    <livewire:inc.who-we-are/>
    <livewire:inc.our-solution-part/>
</div>
