<?php 
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$kategori = $_POST['kategori'];

	include 'koneksi.php';

	$simpan = $conn->query("insert into tbl_blog(judul, isi, kategori) values('$judul','$isi','$kategori')");


	if($simpan){
		//echo "Berhasil disimpan ";
		header('Location:http://localhost/lat3/?menu=3 ');
	}else{
		echo "Gagal disimpan";
	}

	


?>