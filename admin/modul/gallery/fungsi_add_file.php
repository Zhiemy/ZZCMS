<?php
session_start();
include "../../../inc/config.php";
	
	$id_gallery = $_POST['id_gallery'];
	$userfile = $_FILES['userfile'];
	$nama_file = $userfile['name'];
	$tmp = $userfile['tmp_name'];
	$keterangan = $_POST['keterangan'];
	$tanggal = date("Y-m-d h:i:s");
	$postedby = $_SESSION['nama'];

		if($nama_file != "")
		{
			move_uploaded_file($tmp, "../../../upload/$nama_file");
			$kueri = mysql_query("insert into gallery_file 
				(keterangan, nama_file, tgl_entry, entry_oleh, id_gallery) 
				values 
				('$keterangan','$nama_file','$tanggal','$postedby','$id_gallery')");
		}
		else
		{
			$kueri = mysql_query("insert into gallery_file 
				(nama_gallery, keterangan_gallery, jenis, tgl_entry, entry_oleh) 
				values 
				('$nama_gallery','$keterangan','$jenis','$tanggal','$postedby')");
		}
	
			
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/gallery/add_file&id=$id_gallery&entry_sukses");	
			}