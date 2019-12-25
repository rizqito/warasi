@extends('admin.layout.frame')
@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Tambah Berita</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item">Berita</li>
                <li class="breadcrumb-item active">Tambah Berita</li>
            </ol>
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Form Tambah Berita</h2>
                </div>
                <div class="body">
                    <form id="advanced-form" method="post" data-parsley-validate novalidate action="{{ route('admin.berita.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="text-input1">Judul</label>
                            <input type="text" name="judul" class="form-control" required>
						</div>
						<label for="text-input1">Foto</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Upload Foto</span>
							</div>
							<div class="custom-file">
								<input type="file" name="foto" class="custom-file-input" id="inputGroupFile01">
								<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
							</div>
						</div>
						<div class="form-group">
                            <label for="text-input1">Deskripsi</label>
							<textarea name="deskripsi" class="summernote form-control" cols="30" rows="10" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-primary">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection