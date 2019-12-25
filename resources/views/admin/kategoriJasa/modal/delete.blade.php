<!-- Modal -->
<div class="modal modal-danger fade" id="del-{{$kj->id}}" tabindex="-1" role="dialog" aria-labelledby="del-{{$kj->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title_6">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                <i class="fa fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Hapus Data Kategori ?</h4>
                <p>Data Akan terhapus jika kamu klik tombol hapus</p>
                </div>
            </div>
            <div class="modal-footer">
                <form method="post" action="{{ route('admin.kategoriJasa.destroy',$kj) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-secondary">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>