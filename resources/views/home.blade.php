@extends('layout.frame')
@section('content')
<!--  wrapper  -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    <!--section -->
                    <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg"  data-bg="images/bg/32.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                        <div class="overlay"></div>
                        <div class="hero-section-wrap fl-wrap">
                            <div class="container">
                                <div class="intro-item fl-wrap">
                                    <h2>Temukan Jasa Service Favoritmu</h2>
                                </div>
                                <div class="main-search-input-wrap">
                                    <div class="main-search-input fl-wrap">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Service apa yang kamu cari ?" value=""/>
                                        </div>
                                        <div class="main-search-input-item location" id="autocomplete-container">
                                            <input type="text" placeholder="Pilih Lokasi"  value=""/>
                                            <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                        </div>
                                        <div class="main-search-input-item">
                                            <select data-placeholder="Pilih Kategori" multiple class="chosen-select" >
                                                <option>Semua Kategori</option>
                                                <option>TV, LCD, Proyektor</option>
                                                <option>Kulkas, Frezzer</option>
                                                <option>Mesin Cuci</option>
                                                <option>Komputer, Laptop, Notebook, Printer</option>
                                                <option>Handphone, Gadget, Tab</option>
                                                <option>Kamera Digital</option>
                                            </select>
                                        </div>
                                        <button class="main-search-button" onclick="window.location.href='listing.html'">Cari</button>
                                    </div>
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
                                            <img  src="{{ asset('template/katalog/images/all/1.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>10 </span> Locations</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="{{ route('list') }}">TV, LCD, Proyektor</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item gallery-item-second">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/bg/19.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>6 </span> Locations</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Kulkas, Frezzer</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/3.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>21 </span> Locations</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Mesin Cuci</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/22.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>7 </span> Locations</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Komputer, Laptop, Notebook, Printer</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="{{ asset('template/katalog/images/all/5.jpg') }}"   alt="">
                                            <div class="listing-counter"><span>15 </span> Locations</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Handphone, Gadget, Tab</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                            </div>
                            <!-- portfolio end -->
                            <a href="listing.html" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn">Lihat Selengkapnya<i class="fa fa-eye"></i></a>
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
                                <p>Nulla tristique mi a massa convallis cursus. Nulla eu mi magna.</p>
                            </div>
                        </div>
                        <!-- carousel -->
                        <div class="list-carousel fl-wrap card-listing ">
                            <!--listing-carousel-->
                            <div class="listing-carousel  fl-wrap ">
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ asset('template/katalog/images/all/1.jpg') }}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Retail</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Event in City Mol</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet.  </p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ asset('template/katalog/images/all/2.jpg') }}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>15</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Handphone, Gadget, Tab</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Siap Cell</a></h3>
                                                <p>Morbi suscipit erat in diam bibendum rutrum in nisl.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                                        <span>(17 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. M. Yamin No. 100</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ asset('template/katalog/images/all/20.jpg') }}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>13</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Komputer, Laptop, Notebook, Printer </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/4.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Lancar Jaya</a></h3>
                                                <p>Morbiaccumsan ipsum velit tincidunt . </p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3">
                                                        <span>(16 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. </a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ asset('template/katalog/images/all/5.jpg') }}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>3</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Mesin Cuci</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Mantap Jaya</a></h3>
                                                <p>Morbiaccumsan ipsum velit tincidunt . </p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                                        <span>(6 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Pramuka No.22 Samarinda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ asset('template/katalog/images/all/6.jpg') }}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>35</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Handphone, Gadget, Tab</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/6.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">AC Bersaudara</a></h3>
                                                <p>Lorem ipsum gravida nibh vel velit.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(11 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Danau Toba No. 34</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{ asset('template/katalog/images/all/4.jpg') }}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">TV, LCD, Proyektor</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/3.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Adam Koncy</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">SIJAGOKOM</a></h3>
                                                <p>Sed non neque elit. Sed ut imperdie.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Juanda No.1 Samarinda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                                <!--slick-slide-item end-->
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
                                        <div class="images-collage-title">Warasi<span> in</span></div>
                                        <div class="images-collage-main images-collage-item"><img src="{{ asset('template/katalog/images/avatar/1.jpg') }}" alt=""></div>
                                        <div class="images-collage-other images-collage-item" data-position-left="23" data-position-top="10" data-zindex="2"><img src="{{asset('template/katalog/images/avatar/2.jpg')}}" alt=""></div>
                                        <div class="images-collage-other images-collage-item" data-position-left="62" data-position-top="54" data-zindex="5"><img src="{{asset('template/katalog/images/avatar/4.jpg')}}" alt=""></div>
                                        <div class="images-collage-other images-collage-item anim-col" data-position-left="18" data-position-top="70" data-zindex="11"><img src="{{asset('template/katalog/images/avatar/6.jpg')}}" alt=""></div>
                                        <div class="images-collage-other images-collage-item" data-position-left="37" data-position-top="90" data-zindex="1"><img src="{{asset('template/katalog/images/avatar/5.jpg')}}" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="color-bg-text">
                                        <h3>Temukan Jasa Service Favoritmu Disini</h3>
                                        <a href="#" class="color-bg-link modal-open">Daftar Sekarang</a>
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
                            <div class=" single-facts fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="254">154</div>
                                            </div>
                                        </div>
                                        <h6>Penyedia Jasa Service Sekarang</h6>
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
                                        <h6>Pelanggan Yang Melakukan Service</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
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
                                        <p>Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
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
                                        <p>Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent.</p>
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
                                        <p>Qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram seacula quarta decima et quinta decima.</p>
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