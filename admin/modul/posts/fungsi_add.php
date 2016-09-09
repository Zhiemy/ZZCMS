<?php
session_start();
include "../../../inc/config.php";

	$judul = $_POST['judul'];
	$content = $_POST['content'];
	$tanggal = date("Y-m-d h:i:s");
	$postedby = $_SESSION['nama'];
	
			$kueri = mysql_query("insert into posts (judul, content, tgl_entry, entry_oleh) values ('$judul','$content','$tanggal','$postedby')");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/posts/add&entry_sukses");	
			}