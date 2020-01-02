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
        <section class="gray-bg no-pading no-top-padding" id="sec1">
            <div class="col-list-wrap  center-col-list-wrap left-list">
                <div class="container">
                    <!-- list-main-wrap-->
                    <div class="list-main-wrap fl-wrap card-listing">
                        @foreach($berita as $b)
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="{{ '/storage/Berita/'.$b->foto }}" alt="" style="height:250px;">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="#">Berita</a>
                                    <div class="listing-avatar"><a href="#"><img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" alt=""></a>
                                    <span class="avatar-tooltip">Dibuat oleh  <strong>Admin</strong></span>
                                    </div>
                                    <h3><a href="{{route('berita.detail',$b)}}">{{$b->judul}}</a></h3>
                                    <p>{!! substr($b->deskripsi,0,120)!!}...</p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Warasi</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                        @endforeach
                        <!-- pagination-->
                        {{$berita->links('pagination')}}
                    </div>
                    <!-- list-main-wrap end-->
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