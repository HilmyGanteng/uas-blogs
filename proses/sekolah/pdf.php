<?php 

	include '../../conf.php';
	include '../../conn.php';

	// fungsi ini digunakan sebagai awal untuk menyimpan sementara hasil buffer pada php
	ob_start();
	$hasil = $koneksi->prepare("SELECT * FROM sekolah WHERE id ='".get('id')."'");

	$hasil->execute();

	// fungsi ini digunakan untu merubah data query yang di eksekusi menjadi object
	$data = $hasil->fetch(PDO::FETCH_OBJ);

?>

	<h1><img style="max-width: 50px;" src="../../assets/foto/<?php echo $data->logo ?>"><?php echo $data->nama; ?></h1>

	<h3><?php echo $data->alamat; ?></h3>

	<?php 

		// fungsi ini digunakan sebagai akhir untuk menyimpan hasil buffer pada php kemudian disimpan ke $html
		$html = ob_get_clean();

		// fungsi OOP untuk memanggil class Dompdf
		$dompdf = new Dompdf\Dompdf();
		
		// memasukkan $html untuk dijadikan tampilan PDF
		$dompdf->loadHtml($html);
		
		// mengatur ukuran kertas A4 Landscape
		$dompdf->setpaper('A4','landscape');

		// melakukan rendering tampilan PDF
		$dompdf->render();

		// menyimpan file PDF sementara ke temporary file
		$pdf = $dompdf->output();

		// menampilkan hasil pff dengan nama laporan.pdf dan parameter kedua yaitu array Attachment, apabila o maka hanya tampil di browser dan jika 1 maka akan dilakukan proses download
		$dompdf->stream('laporan.pdf',array('Attachment' => 0));

	 ?>