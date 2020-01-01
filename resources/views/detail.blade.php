@extends('layout.frame')
@section('content')
<div id="wrapper">
    <!--  content  --> 
    <div class="content">
        <!--  section  --> 
        <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
            <div class="bg par-elem "  data-bg="{{ '/storage/JasaService/'.$j->foto }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="bubble-bg"></div>
            <div class="list-single-header absolute-header fl-wrap">
                <div class="container">
                    <div class="list-single-header-item">
                        <div class="list-single-header-item-opt fl-wrap">
                            <div class="list-single-header-cat fl-wrap">
                                <a href="#">Reparasi</a>
                                <span>  Sedang Buka <i class="fa fa-check"></i></span>
                            </div>
                        </div>
                        <h2>{{$j->nama_jasa}}<span> - Di Posting Oleh </span><a href="author-single.html">{{$j->mitra->nama}}</a> </h2>
                        <span class="section-separator"></span>
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                            <span>(11 reviews)</span>
                        </div>
                        <div class="list-post-counter single-list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="list-single-header-contacts fl-wrap">
                                    <ul>
                                        <li><i class="fa fa-phone"></i><a  href="#">{{$j->no_telp}}</a></li>
                                        <li><i class="fa fa-map-marker"></i><a  href="#">{{$j->alamat}}</a></li>
                                        <li><i class="fa fa-envelope-o"></i><a  href="#">{{$j->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fl-wrap list-single-header-column">
                                    <div class="share-holder hid-share">
                                        <div class="showshare"><span>Chat Via Wa </span><i class="fa fa-whatsapp"></i></div>
                                        <div class="share-container  isShare"></div>
                                    </div>
                                    <span class="viewed-counter"><i class="fa fa-eye"></i> Telah Dilihat -  156 </span>
                                    <a class="custom-scroll-link" href="#sec5"><i class="fa fa-hand-o-right"></i>Kirim Ulasan </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  section end --> 
        <div class="scroll-nav-wrapper fl-wrap">
            <div class="container">
                <nav class="scroll-nav scroll-init">
                    <ul>
                        <li><a class="act-scrlink" href="#sec1">Utama</a></li>
                        <li><a href="#sec2">Detail</a></li>
                        <li><a href="#sec3">Galeri</a></li>
                        <li><a href="#sec4">Ulasan</a></li>
                    </ul>
                </nav>
                <a href="#" class="save-btn"> <i class="fa fa-heart"></i> Jadikan Favorit </a>
            </div>
        </div>
        <!--  section  --> 
        <section class="gray-section no-top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <div class="list-single-main-item fl-wrap">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Deskripsi </h3>
                                </div>
                                <p>{!! $j->deskripsi !!}</p>
                                <span class="fw-separator"></span>
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Kategori Yang Dilayani</h3>
                                </div>
                                <div class="listing-features fl-wrap">
                                    <ul>
                                        @foreach($kategori as $k)<li><i class="fa fa-list"></i>{{$k->kategori->Kategori}}</li>@endforeach
                                    </ul>
                                </div>
                                <span class="fw-separator"></span>
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Tags</h3>
                                </div>
                                <div class="list-single-tags tags-stylwrap">
                                    @foreach($kategori as $k)<a href="#">{{$k->kategori->Kategori}}</a>@endforeach
                                </div>
                            </div>
                            <div class="list-single-main-item fl-wrap" id="sec3">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Galeri - Foto</h3>
                                </div>
                                <!-- gallery-items   -->
                                <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                    @foreach($galeri as $g)
                                    <!-- 1 -->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="{{ '/storage/Galeri/'.$g->foto }}" alt="{{$g->foto}}">
                                                <a href="{{ '/storage/Galeri/'.$g->foto }}" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 1 end -->
                                    @endforeach
                                </div>
                                <!-- end gallery items -->                                 
                            </div>
                            <!-- list-single-main-item end -->   
                            <!-- list-single-main-item -->   
                            <div class="list-single-main-item fl-wrap" id="sec4">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Ulasan Pelanggan -  <span> 3 </span></h3>
                                </div>
                                <div class="reviews-comments-wrap">
                                    <!-- reviews-comments-item -->  
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="{{ asset('template/katalog/images/avatar/1.jpg') }}" alt=""> 
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">Jessie Manrty</a></h4>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                            <div class="clearfix"></div>
                                            <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                            <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->  
                                    <!-- reviews-comments-item -->  
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="{{ asset('template/katalog/images/avatar/2.jpg') }}" alt=""> 
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">Mark Rose</a></h4>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                            <div class="clearfix"></div>
                                            <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                            <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end--> 
                                    <!-- reviews-comments-item -->  
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="{{ asset('template/katalog/images/avatar/3.jpg') }}" alt=""> 
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">Adam Koncy</a></h4>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                            <div class="clearfix"></div>
                                            <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                            <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->                                                                  
                                </div>
                            </div>
                            <!-- list-single-main-item end -->   
                        </div>
                    </div>
                    <!--box-widget-wrap -->
                    <div class="col-md-4">
                        <div class="box-widget-wrap">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Jam Operasional : </h3>
                                </div>
                                <div class="box-widget opening-hours">
                                    <div class="box-widget-content">
                                        <span class="current-status"><i class="fa fa-clock-o"></i> Now Open</span>
                                        <ul>
                                            @foreach($jamKerja as $jam)
                                            <li><span class="opening-hours-day">{{$jam->hari}} </span><span class="opening-hours-time">{{date('H:i',strtotime($jam->jam_buka))}} - {{date('H:i',strtotime($jam->jam_tutup))}}</span></li>
                                            @endforeach
                                            <li><span class="opening-hours-day">Minggu </span><span class="opening-hours-time">Closed</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->  
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Lokasi / Kontak : </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="map-container">
                                        <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Out Location"></div>
                                    </div>
                                    <div class="box-widget-content">
                                        <div class="list-author-widget-contacts list-item-widget-contacts">
                                            <ul>
                                                <li><span><i class="fa fa-map-marker"></i> Alamat :</span> <a href="#">{{$j->alamat}}</a></li>
                                                <li><span><i class="fa fa-phone"></i> Telepon :</span> <a href="#">{{$j->no_telp}}</a></li>
                                                <li><span><i class="fa fa-envelope-o"></i> Email :</span> <a href="#">{{$j->email}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-widget-social">
                                            <ul>
                                                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Tambahkan Ulasan & Nilai Jasa : </h3>
                                </div>
                                <div class="box-widget opening-hours">
                                    <div class="box-widget-content">
                                    <div id="add-review" class="add-review-box">
                                    <div class="leave-rating-wrap">
                                        <span class="leave-rating-title">Rating mu untuk layanan : </span>
                                        <div class="leave-rating">
                                            <input type="radio" name="rating" id="rating-1" value="1"/>
                                            <label for="rating-1" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2"/>
                                            <label for="rating-2" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3"/>
                                            <label for="rating-3" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4"/>
                                            <label for="rating-4" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5"/>
                                            <label for="rating-5" class="fa fa-star-o"></label>
                                        </div>
                                    </div>
                                    <!-- Review Comment -->
                                    <form   class="add-comment custom-form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><i class="fa fa-user-o"></i></label>
                                                    <input type="text" placeholder="Your Name *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><i class="fa fa-envelope-o"></i>  </label>
                                                    <input type="text" placeholder="Email Address*" value=""/>
                                                </div>
                                            </div>
                                            <textarea cols="40" rows="3" placeholder="Ulasan Kamu:"></textarea>
                                        </fieldset>
                                        <button class="btn  big-btn  color-bg flat-btn">Kirim Ulasan <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Di Posting Oleh : </h3>
                                </div>
                                <div class="box-widget list-author-widget">
                                    <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                        <span class="list-author-widget-link"><a href="author-single.html">{{$j->mitra->nama}}</a></span>
                                        <img src="{{ '/Storage/Mitra/'.$j->Mitra->foto }}" alt=""> 
                                    </div>
                                    <div class="box-widget-content">
                                        <div class="list-author-widget-text">
                                            <div class="list-author-widget-contacts">
                                                <ul>
                                                    <li><span><i class="fa fa-phone"></i> Telepon :</span> <a href="#">{{$j->Mitra->no_telp}}</a></li>
                                                    <li><span><i class="fa fa-envelope-o"></i> Email :</span> <a href="#">{{$j->Mitra->email}}</a></li>
                                                </ul>
                                            </div>
                                            <a href="author-single.html" class="btn transparent-btn">Lihat Profil <i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Jasa Service Lainnya : </h3>
                                </div>
                                <div class="box-widget widget-posts">
                                    <div class="box-widget-content">
                                        <ul>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Cafe "Lollipop"</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="images/all/2.jpg"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title=""> Apartment in the Center</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span> 
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="images/all/3.jpg"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Event in City Mol</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                                </div>
                                            </li>
                                        </ul>
                                        <a class="widget-posts-link" href="#">See All Listing<span><i class="fa fa-angle-right"></i></span></a>   
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->     
                        </div>
                    </div>
                    <!--box-widget-wrap end -->
                </div>
            </div>
        </section>
        <!--  section end --> 
        <div class="limit-box fl-wrap"></div>
        <!--  section  --> 
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
        <!--  section  end--> 
    </div>
    <!--  content end  --> 
</div>
@endsection