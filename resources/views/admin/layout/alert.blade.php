@if(session('info'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Info! </strong> {{session('info')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
@endif

@if(session('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Peringatan! </strong> {{session('danger')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses! </strong> {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
@endif