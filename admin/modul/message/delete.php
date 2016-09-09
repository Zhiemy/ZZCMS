<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from message where id_message = $id");
			
			if($kueri)
			{
				
				header("location:../../index.php?node=modul/message/data&sukses");	
			}
			else
			{
				echo "gagal";
			}