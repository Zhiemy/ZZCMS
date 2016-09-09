<?php
session_start();
include "../../../inc/config.php";

	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("delete from tabel_download where id_tabeldownload = $id");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/download/data&delete_sukses");	
			}