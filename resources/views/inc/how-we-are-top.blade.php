<section class="no_padding container_big">
    <div class="p-10">
        <div class="row">
            <div class="col-lg-6 col-12 text-white animate__animated animate__fadeInLeft ">

                <div class="HowWEAre">
                    <h2 class="h2_title d-block">{{$title->value}}</h2>
                    <img src="{{asset('/images/HowWEAre_Underline.webp')}}" class="d-block w-100 underline_how"/>
                </div>

                <p>{!! $info->value !!}</p>
                <a href="#" class="btn btn-outline-orange">
                    {{__("messages.ABOUT US")}}
                </a>
            </div>
            <div class="col-lg-6 col-12 d-lg-block d-none ">
                <img src="{{asset('images/how_we_are.webp')}}" class="animate__animated animate__fadeInRight"
                     width="90%">
            </div>
        </div>
    </div>


</section>
