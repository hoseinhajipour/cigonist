<section class="container_padding text-white">
    <div class="reveal">
        <h2 class="h2_title">Our Solution</h2>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-2 col-6 ">
                    <a href="{{route("OurSolution")}}">
                        <div class="service_item shadow-sm">

                            <img src="{{Voyager::image($service->image)}}" alt="{{$service->title}}"
                                 class="image_service"
                                 style="width:100%" height="350px">
                            <div class="middle">
                                <div class="text">
                                    <h4 class="h2_title">
                                        {{$service->title}}
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
</section>
