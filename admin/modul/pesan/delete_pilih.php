<?php
session_start();
include "../../../inc/config.php";

	$id_pilih = $_REQUEST['id_pilih'];
	
	if($id_pilih != ""){
		
	foreach($id_pilih as $row){
		
			$kueri = mysql_query("delete from bukutamu where id_bukutamu = $row");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/bukutamu/data&delete_sukses");	
			}
	}
	
	}else{
		
		echo "<center>Tidak ada yang dipilih<br /><strong><a href=../../index.php?node=modul/bukutamu/data>Kembali</a></strong></center>";
		
	}