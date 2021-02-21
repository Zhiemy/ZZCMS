<?php
include "dbs.php";
include "fetchdata.php";

$getpost = new Fetchdata();
$arr_login = $getpost->login();

if ($arr_login) {
	header("location:../admin/index.php");
} else {
	header("location:../login.php?alert");
}
