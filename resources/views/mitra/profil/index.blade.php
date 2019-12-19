@extends('mitra.layout.frame')

@section('content')
<div class="col-md-7">
    <!-- profile-edit-container--> 
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap">
            <h4>Profil Pribadi</h4>
        </div>
        <div class="custom-form">
            <label>Nama Pengguna <i class="fa fa-user-o"></i></label>
            <input type="text" value="{{Auth::user()->name}}"/>
            <label>Alamat Email<i class="fa fa-envelope-o"></i>  </label>
            <input type="text" value="{{Auth::user()->email}}"/>
            <label>Telepon<i class="fa fa-phone"></i>  </label>
            <input type="text" value="{{Auth::user()->no_telp}}"/>
            <label>Alamat <i class="fa fa-map-marker"></i>  </label>
            <input type="text" value="{{Auth::user()->alamat}}"/>
            <label>Deskripsi</label>                                              
            <textarea cols="40" rows="3">{{Auth::user()->deskripsi}}</textarea>
            <button class="btn  big-btn  color-bg flat-btn">Simpan Perubahan<i class="fa fa-angle-right"></i></button>
        </div>
    </div>
    <!-- profile-edit-container end--> 
</div>
<div class="col-md-2">
    <div class="edit-profile-photo fl-wrap">
        <img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" class="respimg" alt="">
        <div class="change-photo-btn">
            <div class="photoUpload">
                <span><i class="fa fa-upload"></i> Upload Photo</span>
                <input type="file" class="upload">
            </div>
        </div>
    </div>
</div>
@endsection