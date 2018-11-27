<?php 

	// mendefinisikan variabel untuk engine database yang digunakan untuk koneksi database
	$engi = "mysql";

	// variabel untuk host database
	$host = "localhost";

	// variabel untuk nama database
	$dbse = "blogs_22";
	
	// variabel untuk username database
	$user = "root";
	
	// variabel untuk password database
	$pass = "";

	// variabel untuk membuat koneksi ke database dengan PDO serta digunakan untuk di eksekusi query mysql
	$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass);


?>