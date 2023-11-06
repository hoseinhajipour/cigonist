<footer class="position-relative bg-dark text-white ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="d-flex">
                    <div>
                        <img src="{{asset('images/logo_icon.webp')}}" width="64" class="m-2">
                    </div>
                    <div>
                        <img src="{{Voyager::image(setting('site.logo-white'))}}" alt="" class="img-fluid mb-5">
                        <p class="mb-5"><img
                                src="{{asset('images/loc_icon.webp')}}"> {!! setting('site.description') !!}</p>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 col-12">
                <h4 class="bold_h4">{{__("messages.CONTACT US")}}</h4>
                <div id="block-9" class="widget-2 widget widget_block widget_text">
                    <p>E-Mail<br>info@cigonist.om</p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <h4 class="bold_h4">{{__("messages.PUBLISHWITHUS")}}</h4>
                <div id="block-9" class="widget-2 widget widget_block widget_text">
                    <p>E-Mail<br>publish@cigonist.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <h4 class="bold_h4">{{__("messages.PRIVACYPOLICY")}}</h4>
                <a href="#" class="text-white d-block">Privacy Policy</a>
                <a href="#" class="text-white d-block">Cookie Policy</a>

            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <p class="text-center">Copyright © cigonist.com 2023. All rights reserved.</p>
                <a href="#" class="btn-back-to-top scrollto btn btn-icon btn-dark shadow-light mb-4 mr-4" tabindex="-1">
                    <i class="fas fa-chevron-up btn-icon-inner"></i>
                </a>

            </div>
            <div class="col-6">
                <label class="orange_color">Connect with us</label>
                <ul class="list-inline mb-8 d-inline-block">

                    <li class="list-inline-item mx-0">
                        <a class="btn btn-sm btn-icon btn-soft-secondary text-gray-400" href="#!" tabindex="0">
                            <img src="{{asset('images/Linkdin.webp')}}" width="32"/>
                        </a>
                    </li>

                    <li class="list-inline-item mx-0">
                        <a class="btn btn-sm btn-icon btn-soft-secondary text-gray-400" href="#!" tabindex="0">
                            <img src="{{asset('images/facebook.webp')}}" width="32"/>
                        </a>
                    </li>

                    <li class="list-inline-item mx-0">
                        <a class="btn btn-sm btn-icon btn-soft-secondary text-gray-400" href="#!" tabindex="0">
                            <img src="{{asset('images/instagram.webp')}}" width="32"/>

                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</footer>
