<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$id = $_REQUEST['id'];

$getpost = new Fungsidata();
$kueri = $getpost->delete('gallery', "WHERE id  = '" . $id . "'");

if ($kueri) {
	header("location:../../index.php?node=modul/gallery/data&sukses");
}
