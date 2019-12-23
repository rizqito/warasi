@extends('mitra.layout.frame')

@section('content')
<div class="col-md-9">
    <!-- profile-edit-container--> 
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap" style="margin-top:30px">
            <h4>Ubah Kata Sandi</h4>
        </div>
        <div class="custom-form no-icons">
            <div class="pass-input-wrap fl-wrap">
                <label>Kata Sandi Saat Ini</label>
                <input type="password" class="pass-input" placeholder="" value=""/>
                <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
            </div>
            <div class="pass-input-wrap fl-wrap">
                <label>Kata Sandi Baru</label>
                <input type="password" class="pass-input" placeholder="" value=""/>
                <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
            </div>
            <div class="pass-input-wrap fl-wrap">
                <label>Konfirmasi Kata Sandi Baru</label>
                <input type="password" class="pass-input" placeholder="" value=""/>
                <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
            </div>
            <button class="btn  big-btn  color-bg flat-btn">Simpan Perubahan<i class="fa fa-angle-right"></i></button>
        </div>
    </div>
    <!-- profile-edit-container end-->                                        
</div>
@endsection