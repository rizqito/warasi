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
        <!-- profile-edit-container--> 
        <form method="post" action="{{ route('mitra.jamOperasi.store') }}">
        @csrf
        <div class="profile-edit-container add-list-container">
            <div class="profile-edit-header fl-wrap">
                <h4>Jasa Service Kamu</h4>
            </div>
            <div class="custom-form">
                <label>Hari Jam Operasional</label>
                <select class="chosen-select" name="hari">
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
                <div class="row">
                    <div class="col-md-6">
                        <label>Jam Buka</label>
                        <select class="chosen-select" name="jam_buka">
                            <option value="">Pilih Jam Buka</option>
                            @for($i=8;$i<=22;$i++)
                            <option value="{{$i.':00:00'}}">{{$i.':00'}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Jam Tutup</label>
                        <select class="chosen-select" name="jam_tutup">
                            <option value="">Pilih Jam Tutup</option>
                            @for($i=9;$i<=23;$i++)
                            <option value="{{$i.':00:00'}}">{{$i.':00'}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn  big-btn  color-bg flat-btn">Simpan<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <!-- profile-edit-container end-->
        </form>
    </div>
</div>
@endsection