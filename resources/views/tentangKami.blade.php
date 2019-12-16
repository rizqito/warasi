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
                    <h2><span>Tentang Kami</span></h2>
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>Tentang Kami</span></div>
                    <span class="section-separator"></span>
                </div>
            </div>
            <div class="header-sec-link">
                <div class="container"><a href="#sec2" class="custom-scroll-link">Ayo Mulai</a></div>
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
        <div class="limit-box"></div>
    </div>
    <!--content end -->
</div>
<!-- wrapper end -->
@endsection