<?php
session_start();
include "../../../inc/config.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama_user = $_POST['nama_user'];
	$level = $_POST['level'];
	$tgl_entry = date("Y-m-d h:i:s");
	$postedby = $_SESSION['nama'];

	
			$kueri = mysql_query("insert into user (username, password, nama_user, tgl_entry, entry_oleh, level) values ('$username','$password','$nama_user', '$tgl_entry', '$postedby' ,'$level')");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/user/data&entry_sukses");	
			}