<?php
session_start();
include "../../../inc/config.php";

	$id_gallery = $_POST['id_gallery'];
	$id_gallery_file = $_POST['id_gallery_file'];
	$userfile = $_FILES['userfile'];
	$nama_file = $userfile['name'];
	$tmp = $userfile['tmp_name'];
	$keterangan = $_POST['keterangan'];
	$tanggal = date("Y-m-d h:i:s");
	$postedby = $_SESSION['nama'];
	
	if($nama_file != "")
	{
		move_uploaded_file($tmp, "../../../upload/$nama_file");
		$kueri = mysql_query("update gallery_file set keterangan = '$keterangan', nama_file = '$nama_file', tgl_entry = '$tanggal' where id_gallery_file ='$id_gallery_file'");
	}
	else
	{
		$kueri = mysql_query("update gallery_file set keterangan = '$keterangan', tgl_entry = '$tanggal' where id_gallery_file ='$id_gallery_file'");
	}
	
			
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/gallery/edit_file&id=$id_gallery&id_gallery_file=$id_gallery_file&entry_sukses");	
			}