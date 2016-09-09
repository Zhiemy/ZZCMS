<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from gallery where id_gallery = $id");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/gallery/data&sukses");	
			}