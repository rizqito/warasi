@extends('mitra.layout.frame')

@section('content')
<form action="{{route('mitra.profil.update',Auth::user())}}" method="post" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="col-md-7">
    <!-- profile-edit-container--> 
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap">
            <h4>Profil Pribadi</h4>
        </div>
        <div class="custom-form">
            <label>Nama Pengguna <i class="fa fa-user-o"></i></label>
            <input type="text" name="nama" value="{{Auth::user()->nama}}"/>
            <label>Alamat Email<i class="fa fa-envelope-o"></i>  </label>
            <input type="text" name="email" value="{{Auth::user()->email}}"/>
            <label>Telepon<i class="fa fa-phone"></i>  </label>
            <input type="text" name="no_telp" value="{{Auth::user()->no_telp}}"/>
        </div>
    </div>
    <!-- profile-edit-container end--> 
</div>
<div class="col-md-2">
    <div class="edit-profile-photo fl-wrap">
        <img src="{{ '/storage/Mitra/'.Auth::user()->foto }}" class="respimg" alt="">
        <div class="change-photo-btn">
            <div class="photoUpload">
                <span><i class="fa fa-upload"></i> Unggah Foto</span>
                <input type="file" name="foto" class="upload">
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="profile-edit-container">
        <div class="custom-form">
            <button type="submit" class="btn big-btn color-bg flat-btn">Simpan Perubahan<i class="fa fa-angle-right"></i></button>
        </div>
    </div>
</div>
</form>
@endsection