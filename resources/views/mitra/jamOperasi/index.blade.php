@extends('mitra.layout.frame')
@section('content')
<div class="profile-edit-page-header">
    <h2>Jam Operasi </h2>
    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Jam Operasi</span></div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="fixed-bar fl-wrap">
            @include('mitra.layout.left-sidebar')
        </div>
    </div>
    <div class="col-md-9">
    <div class="profile-edit-container" style="margin-bottom:50px;margin-top:20px;float:left;">
        <a href="{{route('mitra.jamOperasi.create')}}" class="btn big-btn color-bg flat-btn"><i class="fa fa-plus"></i> Tambah Data Jam Operasi</a>
    </div>
    <div class="dashboard-list-box fl-wrap activities">
        <div class="dashboard-header fl-wrap">
            <h3>Jam Operasional</h3>
        </div>
        @if($jam->count()==0)
        <div class="dashboard-list">
            <div class="dashboard-message">
                <div class="dashboard-message-text">
                    <i class="fa fa-clock-o"></i> Tidak ada data jam operasional jasa service mu
                </div>
            </div>
        </div>
            @else
            @foreach($jam as $j)
            <div class="dashboard-list">
                <div class="dashboard-message">
                    <span class="new-dashboard-item"><a href="{{route('mitra.jamOperasi.edit',$j)}}" style="color:white;"><i class="fa fa-edit"></i></a></span>                
                    <div class="dashboard-message-text">
                        <i class="fa fa-clock-o"></i> {{$j->hari}} ({{date('H:i',strtotime($j->jam_buka))}} - {{date('H:i',strtotime($j->jam_tutup))}})
                    </div>
                </div>
            </div>
            @endforeach
            @endif
    </div>
    </div>
</div>
@endsection