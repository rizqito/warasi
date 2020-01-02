@extends('layout.frame')
@section('content')
<!-- wrapper -->
<div id="wrapper">
    <!--  content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('/template/katalog/images/bg/30.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title center-align">
                    <h2><span>Daftar Service</span></h2>
                    <div class="breadcrumbs fl-wrap"><a href="#">TV, LCD, Proyektor</a></div>
                    <span class="section-separator"></span>
                </div>
            </div>
            
        </section>
        <!--  section  end-->
        <!--  section  -->
        <section class="gray-bg no-pading no-top-padding" id="sec1">
            <div class="col-list-wrap  center-col-list-wrap left-list">
                <div class="container">
                    <div class="listsearch-maiwrap box-inside fl-wrap">
                        <div class="listsearch-header fl-wrap">
                            <h3>Jasa Reparasi : <span>TV, LCD, Proyektor</span></h3>
                        </div>
                        <!-- listsearch-input-wrap  -->
                        <div class="listsearch-input-wrap fl-wrap">
                            <div class="listsearch-input-item">
                                <i class="mbri-key single-i"></i>
                                <input type="text" placeholder="Keywords?" value=""/>
                            </div>
                            <div class="listsearch-input-item">
                                <select data-placeholder="Kategori" class="chosen-select" >
                                    <option>Kategori</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>
							<div class="listsearch-input-text" id="autocomplete-container">
								<label><i class="mbri-map-pin"></i> Masukkan Alamat </label>
								<input type="text" placeholder="Destination , Area , Street" class="qodef-archive-places-search" value=""/>
								<a  href="#"  class="loc-act qodef-archive-current-location"><i class="fa fa-dot-circle-o"></i></a>
							</div>
                            <button class="button fs-map-btn">Cari</button>
                        </div>
                        <!-- listsearch-input-wrap end -->
                    </div>
                    <!-- list-main-wrap-->
                    <div class="list-main-wrap fl-wrap card-listing">
                        @foreach($kat1 as $k)
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="{{ '/storage/JasaService/'.$k->jasaService->foto }}" alt="" style="height:250px;">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="listing.html">TV, LCD, Proyektor</a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="{{ '/storage/Mitra/'.$k->jasaService->mitra->foto }}" alt=""></a>
                                    <span class="avatar-tooltip">Dibuat oleh  <strong>{{$k->jasaService->mitra->nama}}</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html">{{ $k->jasaService->nama_jasa }}</a></h3>
                                    <p>{{ $k->jasaService->deskripsi }}</p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 reviews)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$k->jasaService->alamat}}</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                        @endforeach
                        {{$kat1->links('pagination')}}
                    </div>
                    <!-- list-main-wrap end-->
                </div>
            </div>
        </section>
        <!--  section  end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--  content  end-->
</div>
<!-- wrapper end -->
@endsection