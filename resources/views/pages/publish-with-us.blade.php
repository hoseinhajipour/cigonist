@section('seo')
    @include('meta::manager', [
   'title'         => __("messages.PUBLISHWITHUS") ." | ".setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<div>
    <livewire:inc.slider-top/>
    <livewire:inc.our-services/>
</div>
