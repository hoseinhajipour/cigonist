<footer class="position-relative text-white ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="d-flex">
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
                    <p>E-Mail<br>info@cigonist.com</p>
                </div>
            </div>
            <!--
            <div class="col-lg-3 col-12">
                <h4 class="bold_h4">{{__("messages.PUBLISHWITHUS")}}</h4>
                <div id="block-9" class="widget-2 widget widget_block widget_text">
                    <p>E-Mail<br>publish@cigonist.com</p>
                </div>
            </div>
-->
            <div class="col-lg-3 col-12">
                <h4 class="bold_h4">{{__("messages.PRIVACYPOLICY")}}</h4>
                <a href="http://www.cigonist.com/PolicyPrivacy.html" class="text-white d-block">Privacy Policy</a>
                <a href="#" class="text-white d-block">Cookie Policy</a>

            </div>
        </div>
        <img src="{{asset('images/line_footer.webp')}}" width="100%">
        <a href="#" class="btn-back-to-top scrollto btn btn-icon btn-dark shadow-light shadow mb-4 mr-4" tabindex="-1">
            <i class="fas fa-chevron-up btn-icon-inner"></i>
        </a>
        <div class="row">
            <div class="col-6 text-left">
                <p class="my-4">©2024 CIGONIST All rights reserved.</p>

            </div>
            <div class="col-6 text-right">
                <label class="orange_color">{{__("messages.Connectwithus")}}</label>
                <ul class="list-inline mb-8 d-inline-block">

                    <li class="list-inline-item mx-0">
                        <a class="btn btn-sm btn-icon btn-soft-secondary m-2" href="{{setting('footer.Linkdin')}}" tabindex="0">
                            <img src="{{asset('images/Linkdin.webp')}}" width="32"/>
                        </a>
                    </li>

                    <li class="list-inline-item mx-0">
                        <a class="btn btn-sm btn-icon btn-soft-secondary  m-2" href="{{setting('footer.instagram')}}" tabindex="0">
                            <img src="{{asset('images/instagram.webp')}}" width="32"/>

                        </a>
                    </li>

                    <li class="list-inline-item mx-0">
                        <a class="btn btn-sm btn-icon btn-soft-secondary m-2" href="{{setting('footer.facebook')}}" tabindex="0">
                            <img src="{{asset('images/facebook.webp')}}" width="32"/>
                        </a>
                    </li>




                </ul>
            </div>
        </div>
    </div>
</footer>
