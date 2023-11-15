<div class="orange_border my-3 text-white">
    <div class="text-center">
        <img src="{{asset('images/services.webp')}}" width="256">
    </div>
    <div class="row">
        <div class="col-lg-5 col-12 text-center p-5">
            @foreach($lefts as $service)
                <div class="orange_border p-3 text-left black_bg my-5">
                    <b class="yellow_color my-2 service-title">{{$service->title}}</b>
                    <div class="service-body" style="display: none;">
                        {!! $service->body !!}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-2 col-12 text-center">
            <img src="{{asset('images/platforms.webp')}}" class="platforms_icon my-5">
        </div>
        <div class="col-lg-5 col-12 text-center p-5">
            @foreach($rights as $service)
                <div class="orange_border p-3 text-left black_bg my-5">
                    <b class="yellow_color my-2 service-title">{{$service->title}}</b>
                    <div class="service-body" style="display: none;">
                        {!! $service->body !!}
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
                $(this).next('.service-body').slideToggle('slow');
            });
        });
    </script>
@endpush
