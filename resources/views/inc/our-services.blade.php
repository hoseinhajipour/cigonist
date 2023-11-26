<div class="orange_border_topdown my-3 text-white">
    <div class="text-center">
        <img src="{{asset('images/services.webp')}}" width="256">
    </div>
    <div class="row">
        <div class="col-lg-5 col-12 text-center p-lg-10 p-5">
            @foreach($lefts as $service)
                <div class="orange_border p-3 text-left black_bg my-7">
                    <div class="d-flex justify-content-between align-items-center">
                        <b class="yellow_color my-2 service-title">{{$service->getTranslatedAttribute('title',$language, 'fallbackLocale')}}</b>
                        <span class="fa fa-times close-button" style="display: none;"></span>
                    </div>
                    <div class="service-body" style="display: none;">
                        {!! $service->body !!}
                        <a href="{{route('OurSolution')}}" class="btn btn-primary">{{__("messages.SeeMore")}}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-2 col-12 text-center">
            <img src="{{asset('images/platforms.webp')}}" class="platforms_icon my-5">
        </div>
        <div class="col-lg-5 col-12 text-center p-lg-10 p-5">
            @foreach($rights as $service)
                <div class="orange_border p-3 text-left black_bg my-7">
                    <div class="d-flex justify-content-between align-items-center">
                        <b class="yellow_color my-2 service-title">{{$service->getTranslatedAttribute('title',$language, 'fallbackLocale')}}</b>
                        <span class="fa fa-times close-button" style="display: none;"></span>
                    </div>
                    <div class="service-body" style="display: none;">
                        {!! $service->body !!}
                        <a href="{{route('OurSolution')}}" class="btn btn-primary">{{__("messages.SeeMore")}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@push('javascript')
    <script>
        $(document).ready(function () {
            // Handle click event on service titles
            $('.service-title').on('click', function () {
                // Toggle the visibility of the corresponding service body with animation
                var serviceBody = $(this).closest('.orange_border').find('.service-body');
                serviceBody.slideToggle('fast');

                // Toggle the visibility of the close button
                var closeButton = $(this).siblings('.close-button');
                closeButton.toggle();
            });

            // Handle click event on close buttons
            $('.close-button').on('click', function () {
                // Toggle the visibility of the corresponding service body with animation
                var serviceBody = $(this).closest('.orange_border').find('.service-body');
                serviceBody.slideToggle('fast');

                // Toggle the visibility of the close button
                $(this).toggle();
            });
        });
    </script>
@endpush
