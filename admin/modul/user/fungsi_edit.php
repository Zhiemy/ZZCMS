<?php
session_start();
include "../../../inc/config.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama_user = $_POST['nama_user'];
	$level = $_POST['level'];
	$id = $_REQUEST['id'];
	
		if($password != ""){
			
			$kueri = mysql_query("update user set username = '$username', password = '$password', nama_user = '$nama_user', level = '$level' where id_user ='$id'");
			
		}else{
			
			$kueri = mysql_query("update user set username = '$username', nama_user = '$nama_user', level = '$level' where id_user ='$id'");
			
		}
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/user/data&edit_sukses");	
			}