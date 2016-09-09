<?php
include "../../../inc/config.php";

	$foto = $_FILES['foto'];
	$nama_foto = $foto['name'];
	$tmp  = $foto['tmp_name'];
	$keterangan = $_POST['keterangan'];
	$id = $_REQUEST['id'];

	if($nama_foto != ""){
		
			move_uploaded_file($tmp,"../../../foto/$nama_foto");
			$kueri = mysql_query("update foto set keterangan = '$keterangan',nama_file = '$nama_foto' where id_foto ='$id'");
			
			
	}else{
		
			$kueri = mysql_query("update foto set keterangan = '$keterangan' where id_foto ='$id'");
	}
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/foto/data&edit_sukses");	
			}