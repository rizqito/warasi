@extends('mitra.layout.frame')

@section('content')
<div class="col-md-7">
    <!-- profile-edit-container--> 
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap">
            <h4>Ubah Password</h4>
        </div>
        <div class="custom-form">
            <label>Password Lama <i class="fa fa-user-o"></i></label>
            <input type="text"/>
            <label>Password Baru<i class="fa fa-envelope-o"></i>  </label>
            <input type="text"/>
            <button class="btn  big-btn  color-bg flat-btn">Simpan Perubahan<i class="fa fa-angle-right"></i></button>
        </div>
    </div>
    <!-- profile-edit-container end--> 
</div>
@endsection