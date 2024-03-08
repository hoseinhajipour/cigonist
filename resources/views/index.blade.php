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

    <livewire:inc.slider-top/>

    <livewire:inc.how-we-are-top/>

    <livewire:inc.latest-games/>

    <div class="height_between"></div>

    <livewire:inc.our-services/>

    <livewire:inc.who-we-are/>


</main>
