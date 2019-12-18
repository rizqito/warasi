update data<br>
<form method="post" action="{{ route('admin.teknisi.update',$teknisi->id) }}">
@csrf
@method('PATCH')
<table border="1">
	<tr>
		<td>id_mitra</td>
		<td>:</td>
		<td><select name="id_mitra">
			<option value="">-- pilih id mitra --</option>
			@foreach($mitra as $m)
			<option value="{{$m->id}}"{{($teknisi->id_jasa_service==$m->id ? "selected" : "")}}>{{$m->name}}</option>
			@endforeach
		</select></td>
	</tr>
	<tr>
		<td>nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="{{$teknisi->nama}}"></td>
	</tr>
	<tr>
		<td>No Telp</td>
		<td>:</td>
		<td><input type="text" name="no_telp" value="{{$teknisi->no_telp}}"></td>
	</tr>
	<tr>
		<td colspan="3"><button type="submit">Simpan</button><button type="reset">Batal</button></td>
	</tr>
</table>
</form>