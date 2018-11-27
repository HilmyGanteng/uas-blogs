<?php 

	// addong digunakan untuk menampung query apabila ada keyword yang di search
	$addonq = '';
	if (get("q")!="") { $addong = " WHERE nama LIKE '%".get('q')."%'"; }

	// mempersiapkan query mysql untuk di eksekusi
	$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq. "ORDER BY id DESC");

	// melakukan eksekusi dari query yang sudah dibuat
	$hasil->execute();

	// merubah data yang di eksekusi ke dalam bentuk array
	$data = $hasil->fetchAll();

?>

	<a class="btn pull-right" href="index.php?p=sekolah&m=add">Tambah Baru</a>

	<h2>Data Blog</h2>
	<div style="clear: both;width: 200px;margin-right: 12px;" class="pull-right">
	<form action="index.php?p=sekolah&m=search">
		<input autocomplete="off" type="hidden" name="p" value="sekolah">
		<input autocomplete="off" type="text" name="q" placeholder="Type and enter to search" value="<?php echo(get("q"));?>">
	</form>
</div>

	<div><?php echo ('q')!=""?"hasil pencarian untuk'".(get('q'))."'":""; ?></div>
	<div style="clear: both;">&nbsp;</div>
	<div class="div-table">
	<table class="data" style="overflow-x:auto;">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Konten</th>
				<th>Penulis</th>
				<th colspan="4">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 1;

				//melakukan perulangan untuk menampilkan seluruh data
				foreach ($data as $key) {
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $key['judul']; ?></td>
					<td><?php echo $key['konten']; ?></td>
					<td><?php echo $key['penulis'] ?></td>
					<td><a href="index.php?p=sekolah&m=edit&id=
						<?php echo $key['id']; ?>">Ubah</a></td>
					<td><a onclick="return confirm('Hapus Data<?php echo $key['judul']; ?>')" href="proses/sekolah/hapus.php?id=
						<?php echo $key['id']; ?>">Hapus</a></td>
				</tr>
				<?php 
				$i++;

				 
					
				}
			 ?>
		</tbody>
	</table>
	</div>