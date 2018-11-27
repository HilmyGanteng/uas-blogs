<h2>Tambah Data Blog</h2>

	<!-- form method POST : tipe method POST merupakan salah satu cara untuk mengirim data melalui request jadi tidak akan tampil di url data yang dikirimkan -->

	<!-- enctype multipart/form-data : merupakan tambahan pada form jika pada form terdapat input dengan type file -->

	<!-- action : merupakan tujuan request dari form yang dibuat -->
<form method="POST" action="proses/sekolah/
save.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Konten</td>
			<td><input type="text" name="konten"></td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>