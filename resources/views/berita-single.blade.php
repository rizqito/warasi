@extends('layout.frame')
@section('content')
<!-- wrapper -->	
<div id="wrapper">
    <!-- content -->
    <div class="content">
        <!--section -->
        <section class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('template/katalog/images/bg/23.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title center-align">
                    <h2><span>{{$berita->judul}}</span></h2>
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Berita</a></div>
                    <span class="section-separator"></span>
                </div>
            </div>
            <div class="header-sec-link">
                <div class="container"><a href="#sec1" class="custom-scroll-link">Let's Start</a></div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->   
        <section class="gray-section" id="sec1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <!-- article> --> 
                            <article>
                                <div class="list-single-main-media fl-wrap">
                                    <div class="single-slider-wrapper fl-wrap">
                                        <div class="single-slider fl-wrap"  >
                                            <div class="slick-slide-item"><img src="{{ '/storage/Berita/'.$berita->foto }}" alt="" style="height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>{{$berita->judul}}</h3>
                                    </div>
                                    {!! $berita->deskripsi !!}
                                    <div class="post-author"><a href="#"><img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" alt=""><span>Di buat oleh, Admin</span></a></div>
                                    <div class="post-opt">
                                        <ul>
                                            <li><i class="fa fa-calendar-check-o"></i> <span>{{ date('d M Y',strtotime($berita->created_at)) }}</span></li>
                                            <li><i class="fa fa-eye"></i> <span>264</span></li>
                                        </ul>
                                    </div>
                                    <span class="fw-separator"></span>
                                </div>
                            </article>
                            <!-- article end -->       
                            <span class="section-separator"></span>
                        </div>
                    </div>
                    <!--box-widget-wrap -->
                    <div class="col-md-4">
                        <div class="box-widget-wrap">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Tentang Pembuat : </h3>
                                </div>
                                <div class="box-widget list-author-widget">
                                    <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                        <span class="list-author-widget-link"><a href="author-single.html">Admin</a></span>
                                        <img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" alt=""> 
                                    </div>
                                    <div class="box-widget-content">
                                        <div class="list-author-widget-text">
                                            <div class="list-author-widget-contacts">
                                                <p>Saya admin warasi. saya mempunyai hak penuh untuk mengelola website ini :)</p>
                                            </div>
                                            <div class="list-widget-social">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Popular posts : </h3>
                                </div>
                                <div class="box-widget widget-posts blog-widgets">
                                    <div class="box-widget-content">
                                        <ul>
                                        @foreach($listberita as $list)
                                            <li class="clearfix">
                                                <a href="{{route('berita.detail',$list)}}"  class="widget-posts-img"><img src="{{ '/storage/Berita/'.$list->foto }}"  alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="{{route('berita.detail',$list)}}" title="">{{$list->judul}}</a>
                                                    <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> {{date('d M Y',strtotime($list->updated_at))}}</span> 
                                                </div>
                                            </li>
                                        @endforeach
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
        <!--section end -->
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end --> 
</div>
<!-- wrapper end -->
@endsection