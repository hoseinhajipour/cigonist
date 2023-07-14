@section('seo')
    @include('meta::manager', [
   'title'         => $game->title ." | ".setting('site.title'),
   'description'   =>  $game->excerpt,
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image($game->image) ,
   'keywords'=>setting('site.keywords')
])
@endsection

<div class="container p-5 text-white">
    <br/><br/><br/>
    <div class="card shadow" dir="{{App::getLocale()=="en"?"ltr":"rtl"}}">

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img class="card-img-top" src="{{ Voyager::image($game->image) }}"/>
                </div>
                <div class="col-lg-6 col-12">
                    <h1 class="menu_active">{{$game->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</h1>
                    <p>{{$game->getTranslatedAttribute('excerpt',App::getLocale(), 'fallbackLocale') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    {!! $game->getTranslatedAttribute('body',App::getLocale(), 'fallbackLocale') !!}
                </div>
            </div>

        </div>
    </div>


</div>
