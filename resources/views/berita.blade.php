@extends('layout.frame')
@section('content')
<!-- wrapper -->	
<div id="wrapper">
    <!-- content -->
    <div class="content">
        <!--section -->
        <section class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('template/katalog/images/bg/6.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title center-align">
                    <h2><span>Berita</span></h2>
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>Berita</span></div>
                    <span class="section-separator"></span>
                </div>
            </div>
            
        </section>
        <!-- section end -->
        <!--section -->   
        <section class="gray-section" id="sec1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <span class="section-separator"></span>
                            @foreach($berita as $b)
                            <!-- article> --> 
                            <article>
                                <div class="list-single-main-media fl-wrap">
                                    <a href="{{ route('detail-berita') }}"><img src="{{ '../storage/Berita/'.$b->foto }}" alt=""></a>
                                </div>
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3><a href="{{ route('detail-berita') }}">{{$b->judul}}</a></h3>
                                    </div>
                                    <p>{!!$b->deskripsi!!}</p>
                                    <div class="post-author"><a href="#"><img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" alt=""><span>By , Admin</span></a></div>
                                    <div class="post-opt">
                                        <ul>
                                            <li><i class="fa fa-calendar-check-o"></i> <span>{{ $b->updated_at }}</span></li>
                                            <li><i class="fa fa-eye"></i> <span>264</span></li>
                                        </ul>
                                    </div>
                                    <span class="fw-separator"></span>
                                    <a href="{{ route('detail-berita') }}" class="btn transparent-btn float-btn">Selengkapnya<i class="fa fa-eye"></i></a>
                                </div>
                            </article>
                            <!-- article end -->                               
                            @endforeach
                            <div class="pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                <a href="#" class="current-page">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-wrap -->
                    <div class="col-md-4">
                        <div class="box-widget-wrap">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Postingan Popular : </h3>
                                </div>
                                <div class="box-widget widget-posts blog-widgets">
                                    <div class="box-widget-content">
                                        <ul>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/1.jpg') }}"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Cafe "Lollipop"</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/2.jpg') }}"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title=""> Apartment in the Center</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span> 
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/3.jpg') }}"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Event in City Mol</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/4.jpg') }}"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Event in City Mol</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                                </div>
                                            </li>
                                        </ul>
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
        <div class="limit-box fl-wrap"></div>
        
        <!-- section end -->
    </div>
    <!-- content end -->
</div>
<!-- wrapper end -->
@endsection