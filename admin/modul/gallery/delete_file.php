<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	$id_gallery_file = $_REQUEST['id_gallery_file'];
	
			$kueri = mysql_query("delete from gallery_file where id_gallery_file = $id_gallery_file");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/gallery/data_gallery&id=$id&sukses");	
			}