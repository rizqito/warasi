@extends('mitra.layout.frame')

@section('content')
<div class="col-md-9">
    <!-- profile-edit-container--> 
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap" style="margin-top:30px">
            <h4>Ubah Kata Sandi</h4>
        </div>
        <div class="custom-form no-icons">
        <form action="{{route('mitra.password.update',Auth::user())}}" method="post">
        @csrf
        @method('PATCH')
            <div class="pass-input-wrap fl-wrap {{ $errors->has('current_password') ? ' has-error' : '' }}">
                <label>Kata Sandi Saat Ini</label>
                <input type="password" class="pass-input" name="current_password"/>
                <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
            </div>
            @if ($errors->has('current_password'))
                <span class="help-block">
                    <strong>{{ $errors->first('current_password') }}</strong>
                </span>
            @endif
            <div class="pass-input-wrap fl-wrap {{ $errors->has('password') ? ' has-error' : '' }}">
                <label>Kata Sandi Baru</label>
                <input type="password" class="pass-input" name="password"/>
                <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
            </div>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="pass-input-wrap fl-wrap {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label>Konfirmasi Kata Sandi Baru</label>
                <input type="password" class="pass-input" name="password_confirmation"/>
                <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
            </div>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
            <button class="btn  big-btn  color-bg flat-btn">Simpan Perubahan<i class="fa fa-angle-right"></i></button>
        </form>
        </div>
    </div>
    <!-- profile-edit-container end-->                                        
</div>
@endsection