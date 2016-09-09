<?php
session_start();
include "../../../inc/config.php";

	$jawaban = $_POST['jawaban'];
	$id = $_REQUEST['id'];
	
			$kueri = mysql_query("update bukutamu set jawaban = '$jawaban' where id_bukutamu ='$id'");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/bukutamu/data&edit_sukses");	
			}