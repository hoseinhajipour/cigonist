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
            <div class="overlay-inner overlay-video">
                <video autoplay muted loop>
                    <source src="{{asset('vid/slider.mp4')}}">
                </video>
            </div>
        </div>
    </section>


    <livewire:inc.how-we-are-top/>


    <livewire:inc.latest-games/>

    <livewire:inc.our-services/>

    <livewire:inc.who-we-are/>


</main>
