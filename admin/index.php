<?php
session_start();
if(isset($_SESSION['username']) and isset($_SESSION['password'])){
	
	include "../inc/config.php";
	include "header.php";
	include "body.php";
	include "footer.php";

}else{
	
	header("location:index.php");
	
}