<div style="margin-top: -160px">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($Sliders as $Slider)
                <div class="swiper-slide">
                    @if($Slider->video)
                        <video autoplay muted loop>
                            <source src="{{asset('storage/'.json_decode($Slider->video,true)[0]['download_link'])}}">
                        </video>
                    @else
                        <img data-src="{{ Voyager::image($Slider->image)}}"
                             class="swiper-lazy"
                             width="100%"/>
                    @endif

                </div>
            @endforeach
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            lazy: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</div>
