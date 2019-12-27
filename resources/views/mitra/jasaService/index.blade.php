@extends('mitra.layout.frame')

@section('content')
<div class="profile-edit-page-header">
    <h2>Jasa Service</h2>
    <div class="breadcrumbs"><a href="{{ route('mitra.home') }}">Home</a><span>Jasa Servicemu</span></div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="fixed-bar fl-wrap">
            @include('mitra.layout.left-sidebar')
        </div>
    </div>
    <div class="col-md-9">
        @if(count($jasaService)!=0 && $idJasaService->status==0)
        <div class="notification success fl-wrap">
            <!-- <a class="notification-close" href="#"><i class="fa fa-times"></i></a> -->
            <form method="post" action="{{ route('mitra.service.publikasi',$idJasaService->id)}}">
                @csrf
                @method('PATCH')
                <p>Klik Publikasikan untuk mengaktifkan jasa servicemu <button type="submit" class="btn btn-primary">Publikasikan</button> sekarang</p>
            </form>
        </div>
        @endif
        <div class="dashboard-list-box fl-wrap">
            <div class="dashboard-header fl-wrap">
                <h3>Jasa Service Kamu</h3>
            </div>
            <!-- dashboard-list start-->
            @if(count($jasaService)!=0)
                @foreach($jasaService as $js)
                <div class="dashboard-list">
                    <div class="dashboard-message">
                        @if($js->status==0)
                        <span class="new-dashboard-item">Belum Aktif</span>
                        @else
                        <span class="new-dashboard-item">Aktif</span>
                        @endif
                        <div class="dashboard-listing-table-image">
                            <a href="listing-single.html"><img src="{{ '/storage/JasaService/'.$js  ->foto }}" alt=""></a>
                        </div>
                        <div class="dashboard-listing-table-text">
                            <h4><a href="listing-single.html">{{$js->nama_jasa}}</a></h4>
                            <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a  href="#">{{$js->alamat}}</a></span>
                            <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="5">
                                <span>(2 reviews)</span>
                            </div>
                            <ul class="dashboard-listing-table-opt  fl-wrap">                                
                                <li><a href="{{route('mitra.service.edit',$js)}}">Ubah <i class="fa fa-pencil-square-o"></i></a></li>
                                <li><a href="" onclick="event.preventDefault();document.getElementById('delete').submit();" class="del-btn">Hapus <i class="fa fa-trash-o"></i></a></li>                                
                                <form id="delete" method="post" action="{{ route('mitra.service.destroy',$js) }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="dashboard-list">
                    <div class="dashboard-message">
                        <!-- <span class="new-dashboard-item">New</span> -->
                        <div class="dashboard-listing-table-image">
                            <a href="listing-single.html"><img src="{{ asset('template/katalog/images/all/kosong.jpg') }}" alt=""></a>
                        </div>
                        <div class="dashboard-listing-table-text">
                            <h4><a href="listing-single.html">Kamu Belum Punya Jasa Service</a></h4>
                            <ul class="dashboard-listing-table-opt  fl-wrap">
                                <li><a href="{{ route('mitra.service.create') }}" class="btn">Buat Sekarang<i class="fa fa-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <!-- dashboard-list end-->    
        </div>
    </div>
</div>
@endsection