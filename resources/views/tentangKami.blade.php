@extends('layout.frame')
@section('content')
<!-- wrapper -->
<div id="wrapper">
    <!--Content -->
    <div class="content">
        <!--section -->
        <section class="parallax-section" data-scrollax-parent="true" id="sec1">
            <div class="bg par-elem "  data-bg="{{ asset('/template/katalog/images/bg/24.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title center-align">
                    <h2><span>About Our Company</span></h2>
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>About</span></div>
                    <span class="section-separator"></span>
                </div>
            </div>
            <div class="header-sec-link">
                <div class="container"><a href="#sec2" class="custom-scroll-link">Let's Start</a></div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <div class="scroll-nav-wrapper fl-wrap">
            <div class="container">
                <nav class="scroll-nav scroll-init inline-scroll-container">
                    <ul>
                        <li><a class="act-scrlink" href="#sec1">Top</a></li>
                        <li><a href="#sec2">About</a></li>
                        <li><a href="#sec3">Facts</a></li>
                        <li><a href="#sec4">Team</a></li>
                        <li><a href="#sec5">Testimonials</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <section  id="sec2">
            <div class="container">
                <div class="section-title">
                    <h2> How We Work</h2>
                    <div class="section-subtitle">popular questions</div>
                    <span class="section-separator"></span>
                    <p>Explore some of the best tips from around the city from our partners and friends.</p>
                </div>
                <!--about-wrap -->
                <div class="about-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="video-box fl-wrap">
                                <img src="{{ asset('/template/katalog/images/all/16.jpg') }}" alt="">
                                <a class="video-box-btn image-popup" href="https://vimeo.com/264074381"><i class="fa fa-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Our Awesome <span>Story</span></h3>
                                <h4>Check video presentation to find   out more about us .</h4>
                                <span class="section-separator fl-sec-sep"></span>
                            </div>
                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
                            </p>
                            <a href="#sec3" class="btn transparent-btn float-btn custom-scroll-link">Our Team <i class="fa fa-users"></i></a>
                        </div>
                    </div>
                </div>
                <!-- about-wrap end  -->
                <span class="fw-separator"></span>
                <!-- features-box-container -->
                <div class="features-box-container fl-wrap row">
                    <!--features-box -->
                    <div class="features-box col-md-4">
                        <div class="time-line-icon">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>24 Hours Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.  </p>
                    </div>
                    <!-- features-box end  -->
                    <!--features-box -->
                    <div class="features-box col-md-4">
                        <div class="time-line-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Admin Panel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.  </p>
                    </div>
                    <!-- features-box end  -->
                    <!--features-box -->
                    <div class="features-box col-md-4">
                        <div class="time-line-icon">
                            <i class="fa fa-television"></i>
                        </div>
                        <h3>Mobile Friendly</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.  </p>
                    </div>
                    <!-- features-box end  -->
                </div>
                <!-- features-box-container end  -->
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <section class="color-bg" id="sec3">
            <div class="shapes-bg-big"></div>
            <div class="container">
                <div class=" single-facts fl-wrap">
                    <!-- inline-facts -->
                    <div class="inline-facts-wrap">
                        <div class="inline-facts">
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="254">154</div>
                                </div>
                            </div>
                            <h6>New Visiters Every Week</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts-wrap">
                        <div class="inline-facts">
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="12168">12168</div>
                                </div>
                            </div>
                            <h6>Happy customers every year</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts-wrap">
                        <div class="inline-facts">
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="172">172</div>
                                </div>
                            </div>
                            <h6>Won Awards</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts-wrap">
                        <div class="inline-facts">
                            <div class="milestone-counter">
                                <div class="stats animaper">
                                    <div class="num" data-content="0" data-num="732">732</div>
                                </div>
                            </div>
                            <h6>New Listing Every Week</h6>
                        </div>
                    </div>
                    <!-- inline-facts end -->
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <section id="sec4">
            <div class="container">
                <div class="section-title">
                    <h2>Our Team</h2>
                    <div class="section-subtitle">The Team</div>
                    <span class="section-separator"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                </div>
                <div class="team-holder section-team fl-wrap">
                    <!-- team-item -->
                    <div class="team-box">
                        <div class="team-photo">
                            <img src="{{ asset('/template/katalog/images/team/1.jpg') }}" alt="" class="respimg">
                        </div>
                        <div class="team-info">
                            <h3><a href="#">Alisa Gray</a></h3>
                            <h4>Business consultant</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                            <ul class="team-social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-item  end-->
                    <!-- team-item -->
                    <div class="team-box">
                        <div class="team-photo">
                            <img src="{{ asset('/template/katalog/images/team/2.jpg') }}" alt="" class="respimg">
                        </div>
                        <div class="team-info">
                            <h3><a href="#">Austin Evon</a></h3>
                            <h4>Photographer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                            <ul class="team-social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-item end  -->
                    <!-- team-item -->
                    <div class="team-box">
                        <div class="team-photo">
                            <img src="{{ asset('/template/katalog/images/team/3.jpg') }}" alt="" class="respimg">
                        </div>
                        <div class="team-info">
                            <h3><a href="#">Taylor Roberts</a></h3>
                            <h4>Co-manager associated</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                            <ul class="team-social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-item end  -->
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <section class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('/template/katalog/images/bg/26.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay co lor-overlay"></div>
            <!--container-->
            <div class="container">
                <div class="intro-item fl-wrap">
                    <h2>Need more information</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</h3>
                    <a class="trs-btn" href="contacts.html">Get in Touch + </a>
                </div>
            </div>
        </section>
        <section id="sec5">
            <div class="container">
                <div class="section-title">
                    <h2>Testimonials</h2>
                    <div class="section-subtitle">Clients Reviews</div>
                    <span class="section-separator"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                </div>
            </div>
            <!-- testimonials-carousel -->
            <div class="carousel fl-wrap">
                <!--testimonials-carousel-->
                <div class="testimonials-carousel single-carousel fl-wrap">
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <div class="testimonilas-text">
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dicta sunt explicabo. </p>
                        </div>
                        <div class="testimonilas-avatar-item">
                            <div class="testimonilas-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                            <h4>Lisa Noory</h4>
                            <span>Restaurant Owner</span>
                        </div>
                    </div>
                    <!--slick-slide-item end-->
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <div class="testimonilas-text">
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                            <p>Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                        </div>
                        <div class="testimonilas-avatar-item">
                            <div class="testimonilas-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                            <h4>Antony Moore</h4>
                            <span>Restaurant Owner</span>
                        </div>
                    </div>
                    <!--slick-slide-item end-->
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <div class="testimonilas-text">
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                            <p>Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent.</p>
                        </div>
                        <div class="testimonilas-avatar-item">
                            <div class="testimonilas-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                            <h4>Austin Harisson</h4>
                            <span>Restaurant Owner</span>
                        </div>
                    </div>
                    <!--slick-slide-item end-->
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <div class="testimonilas-text">
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                            <p>Qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram seacula quarta decima et quinta decima.</p>
                        </div>
                        <div class="testimonilas-avatar-item">
                            <div class="testimonilas-avatar"><img src="images/avatar/6.jpg" alt=""></div>
                            <h4>Garry Colonsi</h4>
                            <span>Restaurant Owner</span>
                        </div>
                    </div>
                    <!--slick-slide-item end-->
                </div>
                <!--testimonials-carousel end-->
                <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
            </div>
            <!-- carousel end-->
        </section>
        <!-- section end -->
        <!--section -->
        <section class="gray-section">
            <div class="container">
                <div class="fl-wrap spons-list">
                    <ul class="client-carousel">
                        <li><a href="#" target="_blank"><img src="images/clients/1.png" alt=""></a></li>
                        <li><a href="#" target="_blank"><img src="images/clients/2.png" alt=""></a></li>
                        <li><a href="#" target="_blank"><img src="images/clients/3.png" alt=""></a></li>
                        <li><a href="#" target="_blank"><img src="images/clients/1.png" alt=""></a></li>
                        <li><a href="#" target="_blank"><img src="images/clients/2.png" alt=""></a></li>
                        <li><a href="#" target="_blank"><img src="images/clients/3.png" alt=""></a></li>
                    </ul>
                    <div class="sp-cont sp-cont-prev"><i class="fa fa-angle-left"></i></div>
                    <div class="sp-cont sp-cont-next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <section class="gradient-bg">
            <div class="cirle-bg">
                <div class="bg" data-bg="images/bg/circle.png"></div>
            </div>
            <div class="container">
                <div class="join-wrap fl-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Join our online community</h3>
                            <p>Grow your marketing and be happy with your online business</p>
                        </div>
                        <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">Sign Up <i class="fa fa-sign-in"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <div class="limit-box"></div>
    </div>
    <!--content end -->
</div>
<!-- wrapper end -->
@endsection