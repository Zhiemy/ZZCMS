<?php
session_start();
include "../../../inc/config.php";

	$id_pilih = $_REQUEST['id_pilih'];
	
	if($id_pilih != ""){
		
	foreach($id_pilih as $row){
		
			$kueri = mysql_query("delete from tabel_download where id_tabeldownload = $row");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/download/data&delete_sukses");	
			}
	}
	
	}else{
		
		echo "<center>Tidak ada yang dipilih<br /><strong><a href=../../index.php?node=modul/download/data>Kembali</a></strong></center>";
		
	}