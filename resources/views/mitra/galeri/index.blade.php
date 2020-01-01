@extends('mitra.layout.frame')
@section('content')
<div class="profile-edit-page-header">
    <h2>Galeri </h2>
    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Galeri</span></div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="fixed-bar fl-wrap">
            @include('mitra.layout.left-sidebar')
        </div>
    </div>
    <div class="col-md-9">
        <div class="profile-edit-container" style="margin-bottom:50px;margin-top:20px;float:left;">
            <a href="{{route('mitra.galeriService.create')}}" class="btn big-btn color-bg flat-btn"><i class="fa fa-plus"></i> Tambah Data Galeri</a>
        </div>
        <div class="dashboard-list-box fl-wrap">
            <div class="dashboard-header fl-wrap">
                <h3>Data Galeri Servicemu</h3>
            </div>
            @if($galeri->count()==0)
            <div class="dashboard-list">
                <div class="dashboard-message">
                    <div class="dashboard-listing-table-text">
                        <h3>Tidak ada data galeri service mu</h3>
                    </div>
                </div>
            </div>
            @else
            @foreach($galeri as $g)
            <div class="dashboard-list">
                <div class="dashboard-message">
                    <div class="dashboard-listing-table-image">
                        <a href=""><img src="{{ '/storage/Galeri/'.$g->foto }}" alt=""></a>
                    </div>
                    <div class="dashboard-listing-table-text">
                        <ul class="dashboard-listing-table-opt  fl-wrap">
                            <li><a href="" onclick="event.preventDefault();document.getElementById('delete').submit();" class="del-btn">Hapus <i class="fa fa-trash-o"></i></a></li>                                
                            <form id="delete" method="post" action="{{ route('mitra.galeriService.destroy',$g) }}" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <!-- pagination-->
        <div class="pagination">
            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
            <a href="#">1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
        </div>
    </div>
</div>
@endsection