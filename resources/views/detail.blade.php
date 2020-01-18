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
                        <div class="list-post-counter single-list-post-counter"><span>{{$like->count()}}</span><i class="fa fa-heart"></i></div>
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
                                        <a href="http://wa.me/{{ '6'.substr($j->no_telp,1,12) }}?text=Saya%20tertarik%20dengan%20jasa%20reparasi%20Anda" class="add-list" target="blank" style="margin-top:-15px;">Chat via WA <span><i class="fa fa-whatsapp"></i></span></a>
                                    </div>
                                    <span class="viewed-counter"><i class="fa fa-eye"></i> Telah Dilihat -  156 </span>                                    
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
                                    <h3>Ulasan Pelanggan -  <span> {{$ulasan->count()}} </span></h3>
                                </div>
                                <div class="reviews-comments-wrap">
                                @foreach($ulasan as $u)
                                <!-- reviews-comments-item -->  
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                    @if($u->pelanggan->foto=="")
                                    <img src="{{ asset('template/katalog/images/avatar/1.jpg') }}" alt=""> 
                                    @else
                                    <img src="{{ '/storage/User/'.Auth::user()->foto }}" alt=""> 
                                    @endif
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">{{$u->pelanggan->nama}}</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="{{$u->rating}}"> </div>
                                        <div class="clearfix"></div>
                                        <p>" {!!$u->komentar!!} "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>{{ date('d M Y',strtotime($u->created_at)) }}</span>
                                    </div>
                                </div>
                                <!--reviews-comments-item end-->  
                                @endforeach
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
@endsection