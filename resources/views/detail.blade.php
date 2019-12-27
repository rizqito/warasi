@extends('layout.frame')
@section('content')
    <div id="wrapper">
        <!--  content  --> 
        <div class="content">
            <!--  section  --> 
            <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
                <div class="bg par-elem "  data-bg="{{ asset('template/katalog/images/bg/6.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="bubble-bg"></div>
                <div class="list-single-header absolute-header fl-wrap">
                    <div class="container">
                        <div class="list-single-header-item">
                            <div class="list-single-header-item-opt fl-wrap">
                                <div class="list-single-header-cat fl-wrap">
                                    <a href="#">Reparasi Handphone, Gadget, Tab</a>
                                    <span>  Sedang Buka<i class="fa fa-check"></i></span>
                                </div>
                            </div>
                            <h2>{{$jasaService->nama_jasa}} <span></h2>
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
                                            <li><i class="fa fa-phone"></i><a  href="#">{{$jasaService->no_telp}}</a></li>
                                            <li><i class="fa fa-map-marker"></i><a  href="#">{{$jasaService->alamat}}</a></li>
                                            <li><i class="fa fa-envelope-o"></i><a  href="#">{{$jasaService->email}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fl-wrap list-single-header-column">
                                        <div class="share-holder hid-share">
                                            <div class="showshare"><span>CHat Via WA </span><i class="fa fa-phone"></i></div>
                                            <div class="share-container  isShare"></div>
                                        </div>
                                        <span class="viewed-counter"><i class="fa fa-eye"></i> Viewed -  156 </span>
                                        <a class="custom-scroll-link" href="#sec5"><i class="fa fa-hand-o-right"></i>Add Review </a>
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
                            <li><a class="act-scrlink" href="#sec1">Top</a></li>
                            <li><a href="#sec2">Details</a></li>
                            <li><a href="#sec3">Gallery</a></li>
                            <li><a href="#sec4">Reviews</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="save-btn"> <i class="fa fa-heart"></i> Save </a>
                </div>
            </div>
            <!--  section  --> 
            <section class="gray-section no-top-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="list-single-main-wrapper fl-wrap" id="sec2">
                                <div class="breadcrumbs gradient-bg  fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listing Single</span></div>
                                <div class="list-single-main-media fl-wrap">
                                    <img src="images/all/4.jpg" class="respimg" alt="">
                                    <a href="https://vimeo.com/70851162" class="promo-link gradient-bg image-popup"><i class="fa fa-play"></i><span>Promo Video</span></a>
                                </div>
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Deskripsi </h3>
                                    </div>
                                    {!!$jasaService->berita!!}
                                    <a href="#" class="btn transparent-btn float-btn">Download menu <i class="fa fa-file-pdf-o"></i></a>
                                    <span class="fw-separator"></span>
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Amenities</h3>
                                    </div>
                                    <div class="listing-features fl-wrap">
                                        <ul>
                                            <li><i class="fa fa-rocket"></i> Elevator in building</li>
                                            <li><i class="fa fa-wifi"></i> Free Wi Fi</li>
                                            <li><i class="fa fa-motorcycle"></i> Free Parking</li>
                                            <li><i class="fa fa-cloud"></i> Air Conditioned</li>
                                            <li><i class="fa fa-shopping-cart"></i> Online Ordering</li>
                                            <li><i class="fa fa-paw"></i> Pet Friendly</li>
                                            <li><i class="fa fa-tree"></i> Outdoor Seating</li>
                                            <li><i class="fa fa-wheelchair"></i> Wheelchair Friendly</li>
                                        </ul>
                                    </div>
                                    <span class="fw-separator"></span>
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Tags</h3>
                                    </div>
                                    <div class="list-single-tags tags-stylwrap">
                                        <a href="#">Lunch</a>
                                        <a href="#">Friendly service</a>
                                        <a href="#">Wine</a>
                                        <a href="#">Sandwich</a>
                                        <a href="#">Food</a>
                                        <a href="#">Cocktails</a>                                                                               
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-wrap -->
                        <div class="col-md-4">
                            <div class="box-widget-wrap">
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget-item-header">
                                        <h3>Working Hours : </h3>
                                    </div>
                                    <div class="box-widget opening-hours">
                                        <div class="box-widget-content">
                                            <span class="current-status"><i class="fa fa-clock-o"></i> Now Open</span>
                                            <ul>
                                                <li><span class="opening-hours-day">Monday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                                <li><span class="opening-hours-day">Tuesday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                                <li><span class="opening-hours-day">Wednesday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                                <li><span class="opening-hours-day">Thursday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                                <li><span class="opening-hours-day">Friday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                                <li><span class="opening-hours-day">Saturday </span><span class="opening-hours-time">9 AM - 3 PM</span></li>
                                                <li><span class="opening-hours-day">Sunday </span><span class="opening-hours-time">Closed</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->  
                                <!--box-widget-item -->
                            </div>
                        </div>
                        <!--box-widget-wrap end -->
                    </div>
                </div>
            </section>
            <!--  section end --> 
            <div class="limit-box fl-wrap"></div>
        </div>
        <!--  content end  --> 
    </div>
    <!-- wrapper end -->
    @endsection