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
        <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center mb-4">
                    <div class="col-8">
                        <h2 class="heading h3 mb-0">Detail Berita</h2>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{route('admin.berita.edit',$berita)}}" class="btn btn-primary btn-animated btn-animated-x">
                            <span class="btn-inner--visible">Ubah Berita</span>
                            <span class="btn-inner--hidden"><i class="fa fa-edit"></i></span>
                        </a>
                    </div>
                </div>
                <img class="img-fluid" src="{{ '/storage/Berita/'.$berita->foto }}" alt="About the image" width="400">
                <div class="mt-4">
                    <h6 class="font-17">{!! $berita->judul !!}</h6>
                    <small class="text-muted">Admin  |  Terakhir Update : {{ date('d-m-Y',strtotime($berita->updated_at))}}</small>
                    <hr>
                </div>
                <div class="pw_meta">
                    {!! $berita->deskripsi !!}
                </div>
            </div>
        </div>
            <div class="card">
                <div class="body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection