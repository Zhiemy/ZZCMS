<?php
session_start();
include "../../../inc/config.php";

$id_pilih = @$_REQUEST['id_pilih'];

if($id_pilih != ""){

	foreach($id_pilih as $row){
		
		$kueri = mysql_query("delete from gallery_file where id_gallery_file = $row");

		if($kueri)
		{
			header("location:../../index.php?node=modul/gallery/data_gallery&id=".$_REQUEST['id_gallery']."&sukses");	
		}
	}
	
}else{

	header("location:../../index.php?node=modul/gallery/data_gallery&id=".$_REQUEST['id_gallery']."&warning");			
}