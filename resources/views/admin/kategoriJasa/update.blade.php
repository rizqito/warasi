update data<br>
<form method="post" action="{{ route('admin.kategoriJasa.update',$kategoriJasa->id) }}">
@csrf
@method('PATCH')
<table border="1">
	<tr>
		<td>id_mitra</td>
		<td>:</td>
		<td><select name="id_mitra">
			<option value="">-- pilih id mitra --</option>
			@foreach($mitra as $m)
			<option value="{{$m->id}}"{{($kategoriJasa->id_mitra==$m->id ? "selected" : "")}}>{{$m->name}}</option>
			@endforeach
		</select></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>:</td>
		<td><input type="text" name="kategori" value="{{$kategoriJasa->kategori}}"></td>
	</tr>
	<tr>
		<td colspan="3"><button type="submit">Simpan</button><button type="reset">Batal</button></td>
	</tr>
</table>
</form>