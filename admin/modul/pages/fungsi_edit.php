<?php
session_start();
include "../../../inc/config.php";

	$judul = $_POST['judul'];
	$content = $_POST['content'];
	$id = $_REQUEST['id'];

			$kueri = mysql_query("update pages set judul = '$judul', content = '$content' where id_pages ='$id'");
	
			if($kueri)
			{
				header("location:../../index.php?node=modul/pages/edit&id=$id&edit_sukses");	
			}