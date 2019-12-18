index<br>
<table border="1">
	<tr>
		<td>id</td>
		<td>id jasa service</td>
		<td>nama</td>
		<td>no telp</td>
		<td>Aksi</td>
	</tr>
	@foreach($teknisi as $t)
	<tr>
		<td>{{ $t->id }}</td>
		<td>{{ $t->id_jasa_service }}</td>
		<td>{{ $t->nama }}</td>
		<td>{{ $t->no_telp }}</td>
		<td>
			<a href="{{ route('admin.teknisi.edit',$t) }}">Ubah</a>			
			<a href="" onclick="event.preventDefault();document.getElementById('delete').submit();">Hapus</a>
            <form id="delete" action="{{ route('admin.teknisi.destroy',$t) }}" method="POST" style="display: none;">@csrf @method('DELETE')</form>
		</td>
	</tr>
	@endforeach
</table>