<?php
session_start();
include "../../../inc/config.php";

	$foto = $_FILES['foto'];
	$nama_foto = $foto['name'];
	$tmp  = $foto['tmp_name'];
	$keterangan = $_POST['keterangan'];
	
			move_uploaded_file($tmp,"../../../foto/$nama_foto");
			$kueri = mysql_query("insert into foto(nama_file, keterangan) values ('$nama_foto','$keterangan')");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/foto/data&entry_sukses");	
			}