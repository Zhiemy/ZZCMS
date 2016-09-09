<?php
session_start();
include "../../../inc/config.php";

	$id = $_POST['id'];
	$nama_gallery = $_POST['nama_gallery'];
	$keterangan = $_POST['keterangan'];
	$tanggal = date("Y-m-d h:i:s");
	$postedby = $_SESSION['nama'];
	
			$kueri = mysql_query("update gallery set nama_gallery = '$nama_gallery', keterangan_gallery = '$keterangan' where id_gallery ='$id'");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/gallery/edit&id=$id&edit_sukses");	
			}