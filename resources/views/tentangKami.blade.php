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
                                <img src="{{ asset('/template/katalog/images/all/16.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Apa itu <span>Warasi</span></h3>
                                <span class="section-separator fl-sec-sep"></span>
                            </div>
                            <p>Warasi singkatan dari Wadahnya Reparasi guna memudahkan pengguna untuk mencari jasa service yang aman dan terpercaya khususnya untuk ibu kota kalimantan timur,Aplikasi ini menampilkan secara detail jasa service, ulasan, alamat dan kontak sehingga dengan begitu masyarakat tidak perlu pusing untuk mencari jasa atau tempat service sesuai keinginannya.
                                Dengan menggunakan Aplikasi Penyediaan Jasa Service Berbasis Web yang kami buat. 
                                Harapannya para penyedia jasa service dapat memasarkan jasanya kepada masyarakat dengan jangkauan ke beberapa wilayah di Kalimantan Timur, 
                                melalui layanan online ini kami harapkan dapat memudahkan konsumen untuk mendapatkan informasi secara lengkap tentang penyedia jasa service dan jasa yang ditawarkannya selain itu juga masyarakat mendapatkan jasa service yang berkualitas dan terpercaya.
                            </p>
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
                            <p>Halo semua Nama saya Rizqi tapi teman-teman saya memanggil saya qito saya berusia 21 tahun, saya lahir tanggal 25 juni 1999 di kota samarinda kalimantan timur. hobi saya adalah ngoding, alasan kenapa saya suka ngoding adalah karna kelak kau akan paham  bahwa hal kecil dapat berpengaruh besar. </p>
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
                            <p>Halo Nama saya Jeriawan saya berusia 21 tahun, saya lahir di kota samarinda. hobi saya adalah bernyayi dan Stalking Mantan orang, hal yang terpenting bagi hidup saya adalah berbuat baik, karna saya percaya sebuah kebaikan akan menularkan kebaikan dan memberikan kebahagian pada diri sendiri. </p>
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
                            <p>Halo semua Nama saya Muhammad ikhmal cahyadi saya berusia 21 tahun, saya lahir di kota samarinda yang merupakan ibukota kalimantan timur, indonesia. hobi saya ada 2 yaitu bermain game dan fotografi, makanan favorit saya apa saja asalkan itu gratis, halal dan yang paling penting Enak. </p>
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