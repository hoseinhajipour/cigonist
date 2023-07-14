@section('seo')
    @include('meta::manager', [
   'title'         => __("messages.ContactUs") ." | ".setting('site.title'),
   'description'   =>  setting('site.description'),
   'robots'=>'index,follow',
   'referrer'=>'origin',
   'image'=>Voyager::image(setting('site.favicon')) ,
   'keywords'=>setting('site.keywords')
])
@endsection
<section class="text-white">
    <img src="{{asset('images/contact-bg.jpg')}}" width="100%"/>
    <div class="container">
        <div class="card my-5">
            <div class="card-header">

                <h3>CONTACT US</h3>
            </div>
            <div class="card-body">
                <h4>NCSOFT WEST</h4>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <b>GAME RELATED ISSUES</b>
                                <p>info@cigonist.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <b>GAME RELATED ISSUES</b>
                                <p>info@cigonist.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <b>GAME RELATED ISSUES</b>
                                <p>info@cigonist.com</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
