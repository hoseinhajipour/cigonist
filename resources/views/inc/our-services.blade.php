<div class="orange_border_topdown my-3 text-white">
    <div class="container_big">
        <div class="text-center">
            <img src="{{asset('images/services.webp')}}" width="300">
        </div>
        <div class="row">
            <div class="col-lg-5 col-12 text-center">
                @foreach($lefts as $service)
                    <div class="orange_border service_title_row p-3 text-left black_bg my-7">
                        <div class="d-flex justify-content-between align-items-center">
                            <b class="yellow_color my-2 service-title">{{$service->getTranslatedAttribute('title',$language, 'fallbackLocale')}}</b>
                            <span class="fa fa-times close-button" style="display: none;"></span>
                        </div>
                        <div class="service-short service-title pl-3">{!! $service->short !!}</div>
                        <div class="service-body pl-3" style="display: none;">
                            {!! $service->body !!}
                            <a href="{{route('OurSolution')}}" class="btn btn-primary">{{__("messages.SeeMore")}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-2 col-12 text-center">
                <div class="d-lg-block d-none">
                    <img src="{{asset('images/platforms.webp')}}" class="platforms_icon my-5">
                </div>
                <div class="d-lg-none d-block text-center">
                    <img src="{{asset('images/platforms/platforms_01.png')}}">
                    <marquee behavior="scroll" direction="left" scrollamount="5">
                        <img src="{{asset('images/platforms/platforms_02.png')}}" class="mr-3 ml-3">
                        <img src="{{asset('images/platforms/platforms_03.png')}}" class="mr-3 ml-3">
                        <img src="{{asset('images/platforms/platforms_04.png')}}" class="mr-3 ml-3">
                        <img src="{{asset('images/platforms/platforms_05.png')}}" class="mr-3 ml-3">
                        <img src="{{asset('images/platforms/platforms_06.png')}}" class="mr-3 ml-3">
                        <img src="{{asset('images/platforms/platforms_07.png')}}" class="mr-3 ml-3">
                    </marquee>
                </div>
            </div>
            <div class="col-lg-5 col-12 text-center">
                @foreach($rights as $service)
                    <div class="orange_border service_title_row p-3 text-left black_bg my-7">
                        <div class="d-flex justify-content-between align-items-center">
                            <b class="yellow_color my-2 service-title">{{$service->getTranslatedAttribute('title',$language, 'fallbackLocale')}}</b>
                            <span class="fa fa-times close-button" style="display: none;"></span>
                        </div>
                        <div class="service-short service-title pl-3">{!! $service->short !!}</div>
                        <div class="service-body pl-3" style="display: none;">
                            {!! $service->body !!}
                            <a href="{{route('OurSolution')}}" class="btn btn-primary">{{__("messages.SeeMore")}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@push('javascript')
    <script>
        $(document).ready(function () {
            // Handle click event on service titles
            $('.service_title_row').on('click', function () {
                // Toggle the visibility of the corresponding service body with animation
                var serviceBody = $(this).closest('.service_title_row').find('.service-body');
                var serviceShort = $(this).closest('.service_title_row').find('.service-short');

                serviceBody.slideToggle('fast');
                serviceShort.slideToggle('fast');

                // Toggle the visibility of the close button
                var closeButton = $(this).closest('.service_title_row').find('.close-button');
                closeButton.toggle();
            });

            // Handle click event on close buttons
            $('.close-button').on('click', function () {
                // Toggle the visibility of the corresponding service body with animation
                var serviceBody = $(this).closest('.service_title_row').find('.service-body');
                var serviceShort = $(this).closest('.service_title_row').find('.service-short');

                serviceBody.slideToggle('fast');
                serviceShort.slideToggle('fast');

                // Toggle the visibility of the close button
                $(this).toggle();
            });
        });
    </script>
@endpush
