<section id="home" class="py-9 py-lg-10 min-vh-100 d-flex">
    <div class="overlay overlay-advanced d-flex align-items-center">
        <div class="overlay-inner bg-image-holder bg-cover">
            <img src="assets/images/photos/photo-1.jpg" alt="">
        </div>
        <div class="overlay-inner overlay-video">
            <video autoplay muted loop>
                <source src="storage/{{ json_decode(setting('site.video_intro'))[0]->download_link}}" type="video/mp4">
            </video>
        </div>
        <div class="overlay-inner bg-gray-900 opacity-90"></div>
    </div>
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto text-center text-white">

                <p class="h5 mb-5">Welcome</p>
                <h1 class="mb-5">
                    I Am <span class="font-weight-bold" data-toggle="typed" data-options='{"strings": ["Amanda Watt", "UI/UX Designer", "Photographer"]}'></span>
                </h1>
                <p class="mb-7">I’m Amanda Malat a marketing specialist with over five years work experience. Donec sed fringilla lectus, non vulputate orci. Integer id libero euismod, interdum ligula vel, porttitor magna.</p>
                <a href="#!" class="btn btn-primary d-block d-md-inline-block mb-3 mb-md-0">Download CV</a>
                <a href="#about-me" class="btn btn-soft-white scrollto ml-md-3 d-block d-md-inline-block">Learn more</a>

            </div>
        </div>
    </div>
    <div class="mouse-icon text-gray-600"></div>
</section>

<!-- About -->
<section id="about" class="py-9 py-xl-12">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 mb-6 mb-lg-0">
                <img class="img-fluid w-100 rounded-3x shadow-dark-lg" src="assets/images/avatars/avatar-big.jpg" alt="">
            </div>
            <div class="col-lg-7 offset-lg-1 text-white">
                <h2 class="mb-4">Hi there, my name is Amanda!</h2>
                <p class="lead text-gray-400">I’m Amanda Malat a marketing specialist with over five years work experience. Donec sed fringilla lectus, non vulputate orci. Integer id libero euismod, interdum ligula vel, porttitor magna.</p>
                <p class="text-gray-400 mb-8">Donec sed fringilla lectus, non vulputate orci. Integer id libero euismod, interdum ligula vel, porttitor magna. Sed euismod maximus finibus. Pellentesque tempus ultricies nisi at cursus. Nulla at nisi tellus. Suspendisse potenti.</p>
                <div class="row m-n4">
                    <div class="col-6 col-md-4 p-4">
                        <p class="h1 text-primary mb-2">20+</p>
                        <p class="h6 mb-0">Years in field</p>
                    </div>

                    <div class="col-6 col-md-4 p-4">
                        <p class="h1 text-primary mb-2">30k</p>
                        <p class="h6 mb-0">Photos taken</p>
                    </div>

                    <div class="col-6 col-md-4 p-4 d-none d-md-block">
                        <p class="h1 text-primary mb-2">15</p>
                        <p class="h6 mb-0">Countries visited</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-9 py-xl-12">
    <div class="container position-absolute top-0 bottom-0 left-0 right-0 ml-0 mx-xl-auto zindex-0">
        <div class="overlay overlay-advanced bg-gray-900 vw-100 mb-xl-n12 ml-xl-n12"></div>
    </div>
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-9 text-center text-lg-left">
                <h2 class="text-white mb-4">Skills</h2>
                <p class="text-gray-400">Fusce massa dolor, mattis sed ultrices ut, placerat ut leo. Donec sed fringilla lectus, non vulputate orci. Integer id libero euismod, interdum ligula vel, porttitor magna. Sed euismod maximus finibus.</p>
            </div>
        </div>
        <div class="row mb-9 mb-xl-12 text-white">
            <div class="col-md-6 mb-4 mb-md-0">
                <p class="h6 mb-2">Wordpress</p>
                <div class="progress mb-5 rounded-0 bg-gray-700" style="height:5px">
                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="h6 mb-2">Social Media</p>
                <div class="progress mb-5 rounded-0 bg-gray-700" style="height:5px">
                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="h6 mb-2">Project Management</p>
                <div class="progress rounded-0 bg-gray-700" style="height:5px">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="h6 mb-2">UI/UX</p>
                <div class="progress mb-5 rounded-0 bg-gray-700" style="height:5px">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="h6 mb-2">Analytical Knowledge</p>
                <div class="progress rounded-0 bg-gray-700" style="height:5px">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-9 mb-xl-12 text-white">
            <div class="col-md-6 mb-7 mb-md-0">
                <h5 class="h3 text-center text-lg-left mb-6">Education</h5>
                <p class="h6 mb-0">MA Online Marketing</p>
                <p class="text-gray-400">New York University, 2000 - 2003</p>
                <p class="h6 mb-0">BA Business &amp; Marketing</p>
                <p class="text-gray-400">Silver Oak College, 1998 - 2000</p>
            </div>

            <div class="col-md-6">
                <h5 class="h3 text-center text-lg-left mb-6">Awards</h5>
                <p class="h6 mb-0">Best Product Launch</p>
                <p class="text-gray-400">FGA Marketing Awards, 2015</p>
                <p class="h6 mb-0">Highly Commended</p>
                <p class="text-gray-400">Women in Business, 2010</p>
            </div>
        </div>

        <h2 class="text-center text-lg-left text-white mb-8">Experience</h2>

        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0 text-white">
                <p class="h5 mb-0">2015 - 2020</p>
                <p class="small text-gray-400">Marketing Manager, West House Productions</p>
                <p>Brief description of the position and the responsibilities you had in this post. Fusce massa dolor, mattis sed ultrices ut.</p>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 text-white">
                <p class="h5 mb-0">2012 - 2015</p>
                <p class="small text-gray-400">Marketing Consultant, Jump High Marketing</p>
                <p>Brief description of the position and the responsibilities you had in this post. Fusce massa dolor, mattis sed ultrices ut.</p>
            </div>

            <div class="col-lg-4 text-white">
                <p class="h5 mb-0">2007 - 2011</p>
                <p class="small text-gray-400">Product Manager, Trident Prototyping Studios</p>
                <p>Brief description of the position and the responsibilities you had in this post. Fusce massa dolor, mattis sed ultrices ut.</p>
            </div>
        </div>

    </div>
</section>

<!-- Services -->
<section id="services" class="pt-9 pt-xl-12 pb-0">
    <div class="container position-absolute top-0 bottom-0 left-0 right-0 mr-0 mx-xl-auto zindex-0">
        <div class="overlay overlay-advanced bg-primary vw-100 left-auto mb-9 mb-xl-12 mr-xl-13"></div>
    </div>
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-9 text-white text-center text-lg-left">
                <h2 class="mb-4">Services</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
            </div>
        </div>
        <div class="row mx-n4 mt-n6">

            <div class="col-md-6 col-lg-4 px-4 pt-6">
                <div class="p-7 shadow-dark shadow-lift rounded-3x bg-gray-900">
                    <div class="icon icon-6x text-primary mb-4">
                        <i class="ti-book"></i>
                    </div>
                    <div class="divider bg-primary ml-5"></div>
                    <h4 class="h6 text-white pl-5">Well Documented</h4>
                    <p class="text-gray-400 pl-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4 pt-6">
                <div class="p-7 shadow-dark shadow-lift rounded-3x bg-gray-900">
                    <div class="icon icon-6x text-primary mb-4">
                        <i class="ti-bolt-alt"></i>
                    </div>
                    <div class="divider bg-primary ml-5"></div>
                    <h4 class="h6 text-white pl-5">Fast & Easy</h4>
                    <p class="text-gray-400 pl-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4 pt-6">
                <div class="p-7 shadow-dark shadow-lift rounded-3x bg-gray-900">
                    <div class="icon icon-6x text-primary mb-4">
                        <i class="ti-ruler-pencil"></i>
                    </div>
                    <div class="divider bg-primary ml-5"></div>
                    <h4 class="h6 text-white pl-5">Fully Customizable</h4>
                    <p class="text-gray-400 pl-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4 pt-6">
                <div class="p-7 shadow-dark shadow-lift rounded-3x bg-gray-900">
                    <div class="icon icon-6x text-primary mb-4">
                        <i class="ti-split-h"></i>
                    </div>
                    <div class="divider bg-primary ml-5"></div>
                    <h4 class="h6 text-white pl-5">Responsive Layout</h4>
                    <p class="text-gray-400 pl-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4 pt-6">
                <div class="p-7 shadow-dark shadow-lift rounded-3x bg-gray-900">
                    <div class="icon icon-6x text-primary mb-4">
                        <i class="ti-ruler-pencil"></i>
                    </div>
                    <div class="divider bg-primary ml-5"></div>
                    <h4 class="h6 text-white pl-5">Fully Customizable</h4>
                    <p class="text-gray-400 pl-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4 pt-6">
                <div class="p-7 shadow-dark shadow-lift rounded-3x bg-gray-900">
                    <div class="icon icon-6x text-primary mb-4">
                        <i class="ti-split-h"></i>
                    </div>
                    <div class="divider bg-primary ml-5"></div>
                    <h4 class="h6 text-white pl-5">Responsive Layout</h4>
                    <p class="text-gray-400 pl-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio -->
<section id="portfolio" class="py-9 py-xl-12">
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-10 mx-auto text-center">
                <h2 class="text-white mb-4">Portfolio</h2>
                <p class="text-gray-400 mb-5">Trust the professionals</p>
                <nav class="masonry-filter">
                    <a href="#" class="btn btn-sm btn-soft-secondary text-white m-1 px-4 active" data-filter="*">All</a>
                    <a href="#" class="btn btn-sm btn-soft-secondary text-white m-1 px-4" data-filter=".web">Web</a>
                    <a href="#" class="btn btn-sm btn-soft-secondary text-white m-1 px-4" data-filter=".branding">Branding</a>
                    <a href="#" class="btn btn-sm btn-soft-secondary text-white m-1 px-4" data-filter=".design">Design</a>
                </nav>
            </div>
        </div>
        <div class="masonry-container row mx-n4 mt-n6">

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item branding">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-1.jpg" data-featherlight="image" data-title="Cliff" data-text="Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper facilisis mauris.">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-1.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Branding</p>
                        <h4 class="h5 text-white mb-0">Cliff</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item design">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-6.jpg" data-featherlight="image" data-title="Mountains" data-text="Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper facilisis mauris.">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img-top" src="assets/images/portfolio/portfolio-6.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Design</p>
                        <h4 class="h5 text-white mb-0">Mountains</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item web">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-2.jpg" data-featherlight="image" data-title="Tropical beach" data-text="Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper facilisis mauris.">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-2.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Web</p>
                        <h4 class="h5 text-white mb-0">Tropical beach</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item web" data-featherlight-gallery data-featherlight-filter="a">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-3.jpg">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-3.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Web</p>
                        <h4 class="h5 text-white mb-0">Small islands</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item design" data-featherlight-gallery data-featherlight-filter="a">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-7.jpg" data-title="Tropical beach" data-text="1. Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper facilisis mauris.">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-7.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Design</p>
                        <h4 class="h5 text-white mb-0">Waves</h4>
                    </div>
                </a>
                <a class="d-none" href="assets/images/photos/photo-1.jpg" data-title="Mountains" data-text="2. Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper facilisis mauris."></a>
                <a class="d-none" href="assets/images/photos/photo-2.jpg" data-title="Waves" data-text="3. Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper facilisis mauris."></a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item web">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-5.jpg" data-featherlight="image">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-5.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Web</p>
                        <h4 class="h5 text-white mb-0">Bridge</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item design">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-8.jpg" data-featherlight="image">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-8.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Design</p>
                        <h4 class="h5 text-white mb-0">Workspace</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item branding">
                <a class="card border-0 rounded-3x" href="assets/images/portfolio/portfolio-4.jpg" data-featherlight="image">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-4.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Branding</p>
                        <h4 class="h5 text-white mb-0">Long river</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 pt-6 px-4 masonry-item branding">
                <a class="card border-0 rounded-3x" href="https://www.youtube.com/embed/Gm7FX3WMk3c" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-width="1200" data-featherlight-iframe-height="675">
                    <div class="card-zoom shadow-dark">
                        <img class="card-img" src="assets/images/portfolio/portfolio-9.jpg" alt="">
                    </div>
                    <div class="card-footer p-0 mt-4">
                        <p class="small text-uppercase mb-1 text-gray-400">Branding</p>
                        <h4 class="h5 text-white mb-0">Desert</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Blog -->
<section id="blog" class="py-9 py-xl-12">
    <div class="container position-absolute top-0 bottom-0 left-0 right-0 ml-0 mx-xl-auto zindex-0">
        <div class="overlay overlay-advanced bg-gray-900 vw-100 ml-xl-n12"></div>
    </div>
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-8 text-center text-lg-left">
                <h2 class="text-white mb-4">Latest Blog</h2>
                <p class="text-gray-400">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                <div class="card border-0 bg-gray-800 shadow-dark shadow-lift rounded-3x overflow-hidden">
                    <img class="card-img-top" src="assets/images/blog/image-blog-6.jpg" alt="">
                    <div class="card-body p-6">
                        <small class="text-gray-400 d-block mb-3">March 10, 2020</small>
                        <h5 class="mb-0"><a href="blog-single.html" class="text-white">Building an enduring online audience</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                <div class="card border-0 bg-gray-800 shadow-dark shadow-lift rounded-3x overflow-hidden">
                    <img class="card-img-top" src="assets/images/blog/image-blog-1.jpg" alt="">
                    <div class="card-body p-6">
                        <small class="text-gray-400 d-block  mb-3">April 24, 2020</small>
                        <h5 class="mb-0"><a href="blog-single.html" class="text-white">Building a site for your small business</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card border-0 bg-gray-800 shadow-dark shadow-lift rounded-3x overflow-hidden">
                    <img class="card-img-top" src="assets/images/blog/image-blog-7.jpg" alt="">
                    <div class="card-body p-6">
                        <small class="text-gray-400 d-block  mb-3">May 13, 2020</small>
                        <h5 class="mb-0"><a href="blog-single.html" class="text-white">A day in the life of a fitness blogger</a></h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="pt-8 pt-xl-10 pb-9 pb-xl-10">
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-8">
                <h2 class="text-white mb-4">Contact</h2>
                <p class="text-gray-400">Want to say hello? Want to know more about us? Give us a call or drop us an email and we will get back to you as soon as we can.</p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-lg-4 mb-8 mb-lg-0">
                <div class="row">

                    <div class="col-sm-6 col-md-4 col-lg-12 mb-5 mb-md-0 mb-lg-5">
                        <div class="icon icon-4x text-primary mb-4">
                            <i class="ti-mobile"></i>
                        </div>
                        <p>(0091) 1111 1234567<br/>
                            (084) 2222 1234567</p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-12 mb-5 mb-md-0 mb-lg-5">
                        <div class="icon icon-4x text-primary mb-4">
                            <i class="ti-location-pin"></i>
                        </div>
                        <p>69 Halsey St, New York<br/>
                            United States</p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-12">
                        <div class="icon icon-4x text-primary mb-4">
                            <i class="ti-email"></i>
                        </div>
                        <p>
                            <a href="mailto:support@example.com" class="text-white">support@example.com</a><br/>
                            <a href="mailto:hello@example.com" class="text-white">hello@example.com</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">

                <div class="contact-form">
                    <form class="mb-0" id="cf" name="cf" action="include/sendemail.php" method="post" autocomplete="off">
                        <div class="form-row">

                            <div class="form-process"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="cf-name" name="cf-name" placeholder="Enter your name" class="form-control form-control-soft-light bg-gray-700 border-0 required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="cf-email" name="cf-email" placeholder="Enter your email address" class="form-control form-control-soft-light bg-gray-700 border-0 required">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="cf-subject" name="cf-subject" placeholder="Subject (Optional)" class="form-control form-control-soft-light bg-gray-700 border-0">
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <textarea name="cf-message" id="cf-message" placeholder="Message" class="form-control form-control-soft-light bg-gray-700 border-0 required" rows="7"></textarea>
                                </div>
                            </div>

                            <div class="col-12 d-none">
                                <input type="text" id="cf-botcheck" name="cf-botcheck" value="" class="form-control form-control-soft-light bg-gray-700 border-0" />
                            </div>

                            <div class="col-12 text-center text-lg-left">
                                <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit">Send Message</button>
                            </div>

                            <input type="hidden" name="prefix" value="cf-">

                        </div>
                    </form>
                    <div class="contact-form-result text-center"></div>
                </div>

            </div>
        </div>
    </div>
</section>
