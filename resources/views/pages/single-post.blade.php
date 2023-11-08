@section('seo')
    @include('meta::manager', [
   'title'         => $post->title ." | ".setting('site.title'),
   'description'   =>  $post->excerpt,
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image($post->image) ,
   'keywords'=>setting('site.keywords')
])
@endsection

<div class="container p-5 text-white">
    <br/><br/><br/>
    <div class="card shadow" dir="{{App::getLocale()=="en"?"ltr":"rtl"}}">

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img class="card-img-top" src="{{ Voyager::image($post->image) }}"/>
                </div>
                <div class="col-lg-6 col-12">
                    <h1 class="menu_active h2_title">{{$post->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</h1>
                    <p>{{$post->getTranslatedAttribute('excerpt',App::getLocale(), 'fallbackLocale') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    {!! $post->getTranslatedAttribute('body',App::getLocale(), 'fallbackLocale') !!}
                </div>
            </div>

        </div>
    </div>

    <h1 class="my-3 menu_active h2_title">{{__("messages.relative_posts")}}</h1>
    <div class="row my-3">
        @foreach($posts as $post)
            <div class="col-lg-3 col-12">
                <div class="card shadow my-3">
                    <a href="{{route('post',["slug"=>$post->slug])}}">
                        <img src="{{ Voyager::image($post->getThumbnail($post->image, 'cropped')) }}"
                             class="card-img-top post_image_cover"/>
                    </a>
                    <div class="card-body text-center">
                        <b class="d-block my-3">{{$post->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</b>
                        <a href="{{route('post',["slug"=>$post->slug])}}"
                           class="btn btn-primary">{{__("messages.readMore")}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
