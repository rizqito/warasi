@extends('user.layout.frame2')
@section('content')
<!--  wrapper  -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    <!--section -->
                    <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg"  data-bg="{{ asset('template/katalog/images/bg/bg.jpg') }}" data-scrollax="properties: { translateY: '200px' }"></div>
                        <div class="overlay"></div>
                        <div class="hero-section-wrap fl-wrap">
                            <div class="container">
                                <div class="intro-item fl-wrap">
                                    <h2>Temukan Wadah Reparasi Favoritmu</h2>
                                </div>
                            </div>
                        </div>
                        <div class="bubble-bg"> </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec2" class="custom-scroll-link">Ayo cari</a></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section id="sec2">
                        <div class="container">
                            <div class="section-title">
                                <h2>Kategori Service</h2>
                                <div class="section-subtitle">Kategori Service</div>
                                <span class="section-separator"></span>
                                <p>Pilih kategori yang ingin kamu cari.</p>
                            </div>
                            <!-- portfolio start -->
                            <div class="gallery-items fl-wrap mr-bot spad">
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/kat-1.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>{{$kat1}} </span> Lokasi</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="{{ route('user.kat1') }}">TV, LCD, Proyektor</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item gallery-item-second">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/kat-2.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>{{$kat2}}</span> Lokasi</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="{{route('user.kat2')}}">Kulkas, Frezzer</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/kat-3.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>{{$kat3}} </span> Lokasi</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="{{route('user.kat3')}}">Mesin Cuci</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/kat-4.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>{{$kat4}}</span> Lokasi</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="{{route('user.kat4')}}">Komputer, Laptop, Notebook, Printer</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/kat-5.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>{{$kat5}} </span> Lokasi</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="{{route('user.kat5')}}">Handphone, Gadget, Tab</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                            </div>
                            <!-- portfolio end -->
                            <a href="{{ route('list') }}" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn">Lihat Selengkapnya<i class="fa fa-eye"></i></a>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section class="gray-section">
                        <div class="container">
                            <div class="section-title">
                                <h2>Populer</h2>
                                <div class="section-subtitle">Populer</div>
                                <span class="section-separator"></span>
                                <p>Daftar Wadah Reparasi Populer Saat Ini.</p>
                            </div>
                        </div>
                        <!-- carousel -->
                        <div class="list-carousel fl-wrap card-listing ">
                            <!--listing-carousel-->
                            <div class="listing-carousel  fl-wrap ">
                                @foreach($jasaService as $js)
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ '/storage/JasaService/'.$js->foto }}" alt="" style="height:200px;">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">{{$js->kategori->kategori->Kategori}}</a>
                                                <h3><a href="{{route('user.detail',$js)}}">{{$js->nama_jasa}}</a></h3>
                                                <p>{{$js->deskripsi}}</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$js->alamat}}</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
                                @endforeach
                            </div>
                            <!--listing-carousel end-->
                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        </div>
                        <!--  carousel end-->
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section class="color-bg">
                        <div class="shapes-bg-big"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="images-collage fl-wrap">
                                        <div class="images-collage-title">Wa<span>rasi</span></div>
                                        <div class="images-collage-main images-collage-item"><img src="{{ asset('template/katalog/images/avatar/1.jpg') }}" alt=""></div>
                                        <div class="images-collage-other images-collage-item" data-position-left="23" data-position-top="10" data-zindex="2"><img src="{{asset('template/katalog/images/avatar/2.jpg')}}" alt=""></div>
                                        <div class="images-collage-other images-collage-item" data-position-left="62" data-position-top="54" data-zindex="5"><img src="{{asset('template/katalog/images/avatar/4.jpg')}}" alt=""></div>
                                        <div class="images-collage-other images-collage-item anim-col" data-position-left="18" data-position-top="70" data-zindex="11"><img src="{{asset('template/katalog/images/avatar/6.jpg')}}" alt=""></div>
                                        <div class="images-collage-other images-collage-item" data-position-left="37" data-position-top="90" data-zindex="1"><img src="{{asset('template/katalog/images/avatar/5.jpg')}}" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="color-bg-text">
                                        <h3>Temukan Wadah Reparasi Favoritmu Disini</h3>
                                        <a href="{{ url('/user/register') }}" class="color-bg-link modal-open">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section   end -->
                    <!--section -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2>Bagaimana Caranya ?</h2>
                                <div class="section-subtitle">Service Elektronik</div>
                                <span class="section-separator"></span>
                                <p>Explore some of the best tips from around the world.</p>
                            </div>
                            <!--process-wrap  -->
                            <div class="process-wrap fl-wrap">
                                <ul>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 . </span>
                                            <div class="time-line-icon"><i class="fa fa-map-o"></i></div>
                                            <h4> Temukan jasa service</h4>
                                            <p>Kamu bisa cari tempat service yang kamu inginkan melalui website ini.</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02 .</span>
                                            <div class="time-line-icon"><i class="fa fa-envelope-open-o"></i></div>
                                            <h4> Pesan via telpon/sms</h4>
                                            <p>Kamu dapat mengontak penyedia jasa service yang kamu pilih</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03 .</span>
                                            <div class="time-line-icon"><i class="fa fa-hand-peace-o"></i></div>
                                            <h4> Service selesai</h4>
                                            <p>Service terselesaikan sesuai dengan keinginanmu</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fa fa-check"></i></div>
                            </div>
                            <!--process-wrap   end-->
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section class="color-bg">
                        <div class="shapes-bg-big"></div>
                        <div class="container">
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2>Testimoni</h2>
                                <div class="section-subtitle">Clients Reviews</div>
                                <span class="section-separator"></span>
                                <p>Testimoni dari layanan wadah reparasi.</p>
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
                                        <p>Layanannya cepat, tanggap semoga makin jaya. </p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" alt=""></div>
                                        <h4>Lisa Noory</h4>
                                        <span>Pelanggan</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                        <p>simple, update, full fitur.</p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="{{ asset('template/katalog/images/avatar/3.jpg') }}" alt=""></div>
                                        <h4>Antony Moore</h4>
                                        <span>Pelanggan</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <p>Sangat Membantu :) memudahkan kita untuk mencari jasa service.</p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="{{ asset('template/katalog/images/avatar/1.jpg') }}" alt=""></div>
                                        <h4>Austin Harisson</h4>
                                        <span>Pelanggan</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                        <p>Keren, Sangat Membantu.</p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="{{ asset('template/katalog/images/avatar/6.jpg') }}" alt=""></div>
                                        <h4>Garry Colonsi</h4>
                                        <span>Pelanggan</span>
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
                </div>
                <!-- Content end -->
            </div>
            <!-- wrapper end -->
@endsection