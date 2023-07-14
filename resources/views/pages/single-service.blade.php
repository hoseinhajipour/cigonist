@section('seo')
    @include('meta::manager', [
   'title'         => $service->title ." | ".setting('site.title'),
   'description'   =>  $service->excerpt,
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image($service->image) ,
   'keywords'=>setting('site.keywords')
])
@endsection

<div class="container p-5 text-white">
    <br/><br/><br/>
    <div class="card shadow" dir="{{App::getLocale()=="en"?"ltr":"rtl"}}">

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img class="card-img-top" src="{{ Voyager::image($service->image) }}"/>
                </div>
                <div class="col-lg-6 col-12">
                    <h1 class="menu_active">{{$service->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</h1>
                    <p>{{$service->getTranslatedAttribute('excerpt',App::getLocale(), 'fallbackLocale') }}</p>
                </div>
            </div>
            @include('inc.call_us')
            <div class="row">
                <div class="col-12">
                    {!! $service->getTranslatedAttribute('body',App::getLocale(), 'fallbackLocale') !!}
                </div>
            </div>

        </div>
    </div>


</div>
