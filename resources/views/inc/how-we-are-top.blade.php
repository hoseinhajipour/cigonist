<section class="no_padding container_big">
    <div class="pr-lg-2 pl-lg-2 mt-lg-5  p-0">
        <div class="row">
            <div class="col-lg-6 col-12 text-white animate__animated animate__fadeInLeft ">

                <div class="HowWEAre d-lg-block d-md-none d-none ">
                    <h2 class="h2_title d-block">{{$title->value}}</h2>
                    <img src="{{asset('/images/HowWEAre_Underline.webp')}}" class="d-block w-100 underline_how"/>
                </div>
                <div class="d-lg-none d-md-block d-block">
                    <img src="{{asset('/images/mobile/how_we_are.webp')}}" width="100%" class="my-3"/>
                </div>
                <p>{!! $info->value !!}</p>
                <a href="#" class="btn btn-outline-orange">
                    {{__("messages.ABOUT US")}}
                </a>
            </div>
            <div class="col-lg-6 col-12 d-lg-block d-none text-right">
                <img src="{{asset('images/how_we_are.webp')}}" class="animate__animated animate__fadeInRight"
                     width="90%">
            </div>
        </div>
    </div>


</section>
