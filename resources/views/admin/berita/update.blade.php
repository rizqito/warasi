create data<br>
<form method="post" action="{{ route('admin.berita.update',$berita->id) }}">
@csrf
@method('PATCH')
<table border="1">
	<tr>
		<td>judul</td>
		<td>:</td>
		<td><input type="text" name="judul" value="{{$berita->judul}}"></td>
	</tr>
	<tr>
		<td>foto</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>deskripsi</td>
		<td>:</td>
		<td><textarea name="deskripsi">{{$berita->deskripsi}}</textarea></td>
	</tr>
	<tr>
		<td colspan="3"><button type="submit">Simpan</button><button type="reset">Batal</button></td>
	</tr>
</table>
</form>