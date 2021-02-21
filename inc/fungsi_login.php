<?php
include "dbs.php";
include "fungsidata.php";

$getpost = new Fungsidata();
$arr_login = $getpost->login();

if ($arr_login) {
	header("location:../admin/index.php");
} else {
	header("location:../login.php?alert");
}
