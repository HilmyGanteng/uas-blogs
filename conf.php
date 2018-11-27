<?php
	// membutuhkan file ini untuk dijalankan atau include (memunculkan) file
	

	date_default_timezone_get("Asia/Jakarta");

	// mengambil data dari parameter $_GET,apabila tidak ada maka yang dikembalikan adalah null
	function get($val)
	{
		return isset($_GET[$val])?htmlspecialchars($_GET[$val]):null;
	}

	// fungsi untuk mengambil data dari parameter $_POST, apabila tidak ada maka yang dikembalikan adalah null
	function post($val)
	{
		return	isset($_POST[$val])?htmlspecialchars($_POST[$val]):null;
	} 

	// fungsi untuk melakukan include file php dengan $koneksi yang dibuat global agar bisa diakses koneksi databasenya, apabila file tidak ditemukan maka akan melakukan include terhadap file nofile.php
	function inc($val)
	{
		global $koneksi;
		include file_exists($val.'.php')?$val.'.php':'nofile.php';
	} 
 ?>