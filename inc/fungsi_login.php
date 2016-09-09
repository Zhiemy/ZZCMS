<?php
include "config.php";

	$username = $_REQUEST['username'];
	$password = md5($_REQUEST['password']);
	
		$kueri = mysql_query("select * from user where username = '$username' and password = '$password'");
		$data = mysql_fetch_array($kueri);
		
			if($data['username'] == $username and $data['password'] == $password){
				
					session_start();
					$_SESSION['username'] = $data['username'];
					$_SESSION['password'] = $data['password'];
					$_SESSION['level'] = $data['level'];
					$_SESSION['nama'] = $data['nama_user'];
					header("location:../admin/index.php");
					
			}else{
				
				header("location:../login.php?alert");
				
			}