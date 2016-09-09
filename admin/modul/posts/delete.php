<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from posts where id_posts = $id");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/posts/data&sukses");	
			}