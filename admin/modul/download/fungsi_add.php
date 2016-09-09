<?php
session_start();
include "../../../inc/config.php";

	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$files = $_FILES['upload_file'];
	$nama_file = $files['name'];
	$tmp_file = $files['tmp_name'];
	$doc = $_SERVER['DOCUMENT_ROOT'];

	
			$kueri = mysql_query("insert into tabel_download (judul, nama_file, kategori_download) values ('$judul','$nama_file','$kategori')");
			move_uploaded_file($tmp_file,"$doc/cika/uploads/$nama_file");
			if($kueri)
			{
				header("location:../../index.php?node=modul/download/data&entry_sukses");	
			}