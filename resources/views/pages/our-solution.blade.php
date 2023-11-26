<img src="{{asset('assets/images/photos/photo-1.jpg')}}" class="img-objectfit" width="100%" height="500">
<section class="text-white">
    <div class="container">
        <h1 class="h2_title">OUR SOLUTION</h1>
        <div class="row">
            @foreach($services as $service)
                <div class="col-12">
                    <div class="white_box shadow my-3">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <img src="{{asset("images/Service_ContentDesign_top.webp")}}" class="top_cover">
                                <img src="{{Voyager::image($service->row_image)}}" width="100%" height="100%"/>
                            </div>
                            <div class="col-lg-7 col-12 orange_bg_service service_padding" >
                                <h2>{{$service->title}}</h2>
                                <p>{!! $service->body !!}</p>
                                <a href="#"
                                   class="readmore_02_btn">
                                    <img src="{{asset('images/ContentMore_Button.webp')}}" width="64">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <section class="my-5">
            <h2 class="h2_title">OUR PORTFOLIO</h2>

            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-sm-12 my-3 ">
                        <a data-fancybox="gallery" href="{{ Voyager::image($gallery->image)}}">
                            <img src="{{ Voyager::image($gallery->getThumbnail($gallery->image, 'cropped')) }}"
                                 class="img_box shadow"
                                 width="100%"/>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>


    </div>
</section>
