<?php
session_start();
include "../../../inc/config.php";

	$judul = $_POST['judul'];
	$id = $_REQUEST['id'];
	$files = $_FILES['upload_file'];
	$nama_file = $files['name'];
	$tmp_file = $files['tmp_name'];
	$doc = $_SERVER['DOCUMENT_ROOT'];
	
	if($nama_file != ""){
	
			$kueri = mysql_query("update tabel_download set judul = '$judul', nama_file='$nama_file', kategori_download = '$kategori' where id_tabeldownload ='$id'");
			move_uploaded_file($tmp_file,"$doc/cika/uploads/$nama_file");
			
	}else{
	
			$kueri = mysql_query("update tabel_download set judul = '$judul' where id_tabeldownload ='$id'");
	
	}
			if($kueri)
			{
				header("location:../../index.php?node=modul/download/data&edit_sukses");	
			}