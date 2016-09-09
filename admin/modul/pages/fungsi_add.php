<?php
session_start();
include "../../../inc/config.php";

	$judul = $_POST['judul'];
	$content = $_POST['content'];
	$tgl_entry = date("Y-m-d h:i:s");
	$entry_oleh = $_SESSION['nama'];

	
			$kueri = mysql_query("insert into pages (judul, content, tgl_entry, entry_oleh) values ('$judul','$content','$tgl_entry','$entry_oleh')");
			if($kueri)
			{
				header("location:../../index.php?node=modul/pages/add&entry_sukses");	
			}