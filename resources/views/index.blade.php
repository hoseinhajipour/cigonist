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
<main>
    <section id="home" class="py-9 py-lg-10 min-vh-75 d-flex">
        <div class="overlay overlay-advanced d-flex align-items-center">
            <div class="overlay-inner bg-image-holder bg-cover">
                <img src="assets/images/photos/photo-1.jpg" alt="">
            </div>
            <div class="overlay-inner overlay-video">
                <video autoplay muted loop>
                    <source src="{{asset('vid/slider.mp4')}}">
                </video>
            </div>
            <div class="overlay-inner bg-gray-900 opacity-90">
            </div>
        </div>
        <div class="container align-self-center animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-12 mx-auto text-start text-white">

                    <!--
                    <p class="h5 mb-5">
                        THE ULTIMATE
                        COMPETITIVE
                        GAMING PLATFORM</p>
                    <p class="mb-7">Create events, teams and communities with ease</p>
                    <a href="#about-me" class="btn btn-dark">Learn
                        more</a>
-->
                </div>
            </div>
        </div>
    </section>


    <livewire:inc.how-we-are-top/>


    <livewire:inc.latest-games/>

    <livewire:inc.our-services/>

    <livewire:inc.who-we-are/>


</main>
