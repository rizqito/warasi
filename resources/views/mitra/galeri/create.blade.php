@extends('mitra.layout.frame')

@section('content')
<div class="profile-edit-page-header">
    <h2>Galeri</h2>
    <div class="breadcrumbs"><a href="{{ route('mitra.home') }}">Home</a><span>Galeri</span></div>
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
                <h4>Tambah Data Galeri</h4>
            </div>
            <div class="custom-form">
                <div class="row">
                <form method="post" class="fuzone" action="{{ route('mitra.galeriService.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="col-md-12">
                        <!-- act-widget--> 
                        <div class="act-widget fl-wrap">
                            <div class="add-list-media-wrap">
                                    <div class="fu-text">
                                        <span><i class="fa fa-picture-o"></i>klik di sini atau letakkan file gambar untuk diunggah</span>
                                    </div>
                                    <input type="file" name="foto" class="upload">
                            </div>
                        </div>
                        <!-- act-widget end-->
                    </div>
                    <button type="submit" class="btn big-btn color-bg flat-btn">Simpan <i class="fa fa-angle-right"></i></button>
                </form>
                </div>
            </div>
        </div>
        <!-- profile-edit-container end-->
    </div>
</div>
@endsection