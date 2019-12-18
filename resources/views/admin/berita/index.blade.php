index<br>
<table border="1">
	<tr>
		<td>id</td>
		<td>judul</td>
		<td>foto</td>
		<td>deskripsi</td>
		<td>Aksi</td>
	</tr>
	@foreach($berita as $b)
	<tr>
		<td>{{ $b->id }}</td>
		<td>{{ $b->judul }}</td>
		<td>{{ $b->foto }}</td>
		<td>{{ $b->deskripsi }}</td>
		<td>
			<a href="{{ route('admin.berita.edit',$b) }}">Ubah</a>			
			<a href="" onclick="event.preventDefault();document.getElementById('delete').submit();">Hapus</a>
            <form id="delete" action="{{ route('admin.berita.destroy',$b) }}" method="POST" style="display: none;">@csrf @method('DELETE')</form>
		</td>
	</tr>
	@endforeach
</table>