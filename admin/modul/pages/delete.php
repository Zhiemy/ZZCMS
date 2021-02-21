<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$id = $_REQUEST['id'];

$getpost = new Fungsidata();
$kueri = $getpost->delete('pages', "WHERE id  = '" . $id . "'");

if ($kueri) {
	header("location:../../index.php?node=modul/pages/data&sukses");
}
