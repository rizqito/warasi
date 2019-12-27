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
                                <h3>Apa itu <span>Warasi</span></h3>
                                <span class="section-separator fl-sec-sep"></span>
                            </div>
                            <p>Warasi singkatan dari Wadahnya Reparasi guna memudahkan pengguna untuk mencari jasa service yang aman dan terpercaya khususnya untuk ibu kota kalimantan timur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <section id="sec4">
            <div class="container">
                <div class="section-title">
                    <h2>Team Kami</h2>
                    <div class="section-subtitle">The Team</div>
                    <span class="section-separator"></span>
                </div>
                <div class="team-holder section-team fl-wrap">
                    <!-- team-item -->
                    <div class="team-box">
                        <div class="team-photo">
                            <img src="{{ asset('/template/katalog/images/team/qito.jpg') }}" alt="" class="respimg">
                        </div>
                        <div class="team-info">
                            <h3><a href="#">Qito</a></h3>
                            <h4>Backend Developer</h4>
                            <p>Mencoba untuk jadi yang terbaik</p>
                            <ul class="team-social">
                                <li><a href="https://web.facebook.com/qito.rizqi" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-item  end-->
                    <!-- team-item -->
                    <div class="team-box">
                        <div class="team-photo">
                            <img src="{{ asset('/template/katalog/images/team/jeri.jpg') }}" alt="" class="respimg">
                        </div>
                        <div class="team-info">
                            <h3><a href="#">Jeriawan</a></h3>
                            <h4>TypeWriter</h4>
                            <p>Gagal itu makanan sehari-hari. Itu biasa, yang penting bagimana (kamu) menyikapinya. Evaluasi. Bangkit. Gagal lagi? Bangkit lagi!</p>
                            <ul class="team-social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-item end  -->
                    <!-- team-item -->
                    <div class="team-box">
                        <div class="team-photo">
                            <img src="{{ asset('/template/katalog/images/team/ikhmal.jpg') }}" alt="" class="respimg">
                        </div>
                        <div class="team-info">
                            <h3><a href="#">IKhmal Cahyadi</a></h3>
                            <h4>FrontEnd Developer</h4>
                            <p>Rahasia sukses sebenarnya adalah semangat. Ya, lebih dari semangat adalah bersemangat. Saya suka melihat orang bersemangat. Apabila mereka bersemangat mereka membuat hidup mereka sukses</p>
                            <ul class="team-social">
                                <li><a href="https://web.facebook.com/muhammad.ikhmal.52" target="_blank"><i class="fa fa-facebook"></i></a></li>
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