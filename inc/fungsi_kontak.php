<?php
include "config.php";
	
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pesan = $_POST['pesan'];
	
		$kueri = mysql_query("insert into bukutamu(nama, email, phone, pesan) values ('$nama','$email','$phone', '$pesan')");
		
		if(!empty($nama)){
		
			if($kueri)
			{
				
				header("location:../kontak.php?succes");
				
			}else{
			
				echo "Data gagal Dimasukan";	
				
			}
		}else{
		
		header("location:../kontak.php?gagal");
	
		}