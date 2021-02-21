<?php
session_start();
if (isset($_SESSION['username']) and isset($_SESSION['password'])) {

	include "../inc/dbs.php";
	include "../inc/fungsidata.php";
	include "header.php";
	include "body.php";
	include "footer.php";
} else {

	header("location:../login.php");
}
