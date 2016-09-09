<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	$kueri = mysql_query("select * from foto where id_foto = $id");
	$data = mysql_fetch_array($kueri);
			
			$kueri = mysql_query("delete from foto where id_foto = $id");
			
			if($kueri)
			{
				unlink("../../../foto/".$data['nama_file']);
				header("location:../../index.php?node=modul/foto/data&delete_sukses");	
			}