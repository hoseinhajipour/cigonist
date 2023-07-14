<section class="text-white">
    <div class="container text-center">
        <h1>{{__("messages.service_how")}}</h1>
        <div class="row">

            @foreach($services as $service)
                <div class="col-lg-4 col-6">
                    <div class="gray_box">
                        <a href="{{route('service',["slug"=>$service->slug])}}" class="no_link">
                            <img src="{{Voyager::image($service->image)}}" class="gray_box_img"/>
                            <b class="gray_box_title text-white">{{$service->title}}</b>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
