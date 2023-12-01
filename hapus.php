<?php 
	
	$id_hapus = $_GET['id_hapus'];


	echo "Data yang akan dihapus id = ".$id_hapus."<br>";

	include "koneksi.php";

	$delete = $conn->query("delete from tbl_blog where id = '$id_hapus'");

	if($delete){
		echo "Data berhasil terhapus";
	}else{
		echo "Data gagal terhapus";
	}





?>