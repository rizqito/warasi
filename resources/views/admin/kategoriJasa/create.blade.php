create data<br>
<form method="post" action="{{ route('admin.kategoriJasa.store') }}">
@csrf
<table border="1">
	<tr>
		<td>id_mitra</td>
		<td>:</td>
		<td><select name="id_mitra">
			<option value="">-- pilih id_mitra --</option>
			@foreach($mitra as $m)
			<option value="{{$m->id}}">{{$m->name}}</option>
			@endforeach
		</select></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>:</td>
		<td><input type="text" name="kategori" value="{{old('kategori')}}"></td>
	</tr>
	<tr>
		<td colspan="3"><button type="submit">Simpan</button><button type="reset">Batal</button></td>
	</tr>
</table>
</form>