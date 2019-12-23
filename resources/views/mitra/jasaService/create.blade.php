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
        <div class="profile-edit-container add-list-container">
            <div class="profile-edit-header fl-wrap">
                <h4>Jasa Service Kamu</h4>
            </div>
            <div class="custom-form">
                <label>Nama Jasa Servicemu<i class="fa fa-user"></i></label>
                <input type="text" name="nama_jasa" value="{{ old('nama_jasa') }}"/>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email Jasa Servicemu<i class="fa fa-envelope"></i></label>
                        <input type="text" name="email" value="{{ old('email') }}"/>
                    </div>
                    <div class="col-md-6">
                        <label>No Telp<i class="fa fa-phone"></i></label>
                        <input type="text" name="no_telp" value="{{ old('no_telp') }}"/>
                    </div>
                </div>
                <label>Alamat<i class="fa fa-map-marker"></i></label>
                <input type="text" name="nama_jasa" value="{{ old('nama_jasa') }}"/>
            </div>
        </div>
        <!-- profile-edit-container end--> 
        <!-- profile-edit-container--> 
        <div class="profile-edit-container add-list-container">
            <div class="profile-edit-header fl-wrap">
                <h4>Detail Informasi</h4>
            </div>
            <div class="custom-form">
                <label>Deskripsikan Jasa Servicemu</label>
                <textarea cols="40" rows="3" placeholder=""></textarea>
                <!-- Checkboxes -->
                <div class=" fl-wrap filter-tags">
                    <h4>Kategori Jasa </h4>
                    <input id="check-a" type="checkbox" name="check">
                    <label for="check-a">TV, LCD, Proyektor</label>
                    <input id="check-b" type="checkbox" name="check">
                    <label for="check-b">Kulkas, Frezzer</label>
                    <input id="check-c" type="checkbox" name="check">
                    <label for="check-c">Mesin Cuci</label>
                    <input id="check-d" type="checkbox" name="check">
                    <label for="check-d">Komputer, Laptop, Notebook, Printer</label>
                    <input id="check-d" type="checkbox" name="check">
                    <label for="check-d">Handphone, Gadget, Tab</label>
                </div>
                <button class="btn  big-btn  color-bg flat-btn">Simpan<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <!-- profile-edit-container end-->
    </div>
</div>
@endsection