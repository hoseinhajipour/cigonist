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
<img src="{{asset('assets/images/photos/photo-1.jpg')}}" class="img-objectfit" width="100%" height="500">
<div >
    <livewire:inc.our-services/>
</div>
