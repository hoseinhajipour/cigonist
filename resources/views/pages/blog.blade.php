@section('seo')
    @include('meta::manager', [
   'title'         => __("messages.lastnews") ." | ".setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<img src="{{asset('assets/images/photos/photo-1.jpg')}}" class="img-objectfit" width="100%" height="500">
<div class="container" >
    <h2 class="my-5 text-white h2_title">{{__("messages.lastnews")}}</h2>

    <div class="row">
        <div class="col-lg-3 d-lg-block d-none">
            <div class="card shadow">
                <div class="card-body">
                    <label class="text-white">{{__("messages.search")}}</label>
                    <input wire:model="search" class="form-control" placeholder="{{__("messages.search")}}">
                    <hr/>
                    <label class="text-white">{{__("messages.category")}}</label>
                    @foreach($categories as $category)
                        <a href="{{route('blog',["category"=>$category->id])}}"
                           class="btn btn-primary form-control my-1">{{$category->getTranslatedAttribute('name',App::getLocale(), 'fallbackLocale')}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-12">
            <div class="row">

                @forelse($posts as $post)
                    <div class="col-lg-4 col-12">
                        <div class="card shadow my-3">
                            <a href="{{route('post',["slug"=>$post->slug])}}">
                                <img src="{{ Voyager::image($post->getThumbnail($post->image, 'cropped')) }}"
                                     class="card-img-top post_image_cover"/>
                            </a>
                            <div class="card-body text-center">
                                <b class="d-block text-white my-3">{{$post->getTranslatedAttribute('title',App::getLocale(), 'fallbackLocale')}}</b>
                                <a href="{{route('post',["slug"=>$post->slug])}}"
                                   class="btn btn-primary">{{__("messages.readMore")}}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="alert alert-warning text-center">{{__("messages.notfound")}}</p>
                @endforelse
            </div>
            <div class="my-3">
                {{$posts->links()}}
            </div>
        </div>
    </div>

</div>
