<?php
session_start();
include "../../../inc/config.php";

	$nama_gallery = $_POST['nama_gallery'];
	$keterangan = $_POST['keterangan'];
	$tanggal = date("Y-m-d h:i:s");
	$postedby = $_SESSION['nama'];
	
			$kueri = mysql_query("insert into gallery 
				(nama_gallery, keterangan_gallery, tgl_entry, entry_oleh) 
				values 
				('$nama_gallery','$keterangan','$tanggal','$postedby')");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/gallery/add&entry_sukses");	
			}