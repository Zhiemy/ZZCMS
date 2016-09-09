<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from pages where id_pages = $id");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/pages/data&sukses");	
			}