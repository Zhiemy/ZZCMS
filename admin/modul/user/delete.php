<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from user where id_user = $id");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/user/data&delete_sukses");	
			}