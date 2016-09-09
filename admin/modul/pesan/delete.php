<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from bukutamu where id_bukutamu = $id");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/bukutamu/data&delete_sukses");	
			}