<section class="no_padding">
    <div class="p-10">
        <div class="row">
            <div class="col-lg-6 col-12 text-white animate__animated animate__fadeInLeft ">
                <h2 class="h2_title">{{$title->value}}</h2>
                <p>{!! $info->value !!}</p>
                <a href="#" class="btn btn-outline-orange">
                    {{__("messages.ABOUT US")}}
                </a>
            </div>
            <div class="col-lg-6 col-12 ">
                <img src="{{asset('images/how_we_are.webp')}}" class="animate__animated animate__fadeInRight" width="90%">
            </div>
        </div>
    </div>


</section>
