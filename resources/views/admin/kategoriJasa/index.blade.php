index<br>
<table border="1">
	<tr>
		<td>id</td>
		<td>id mitra</td>
		<td>kategori</td>
		<td>Aksi</td>
	</tr>
	@foreach($kategoriJasa as $kj)
	<tr>
		<td>{{ $kj->id }}</td>
		<td>{{ $kj->id_mitra }}</td>
		<td>{{ $kj->kategori }}</td>
		<td>
			<a href="{{ route('admin.kategoriJasa.edit',$kj) }}">Ubah</a>			
			<a href="" onclick="event.preventDefault();document.getElementById('delete').submit();">Hapus</a>
            <form id="delete" action="{{ route('admin.kategoriJasa.destroy',$kj) }}" method="POST" style="display: none;">@csrf @method('DELETE')</form>
		</td>
	</tr>
	@endforeach
</table>