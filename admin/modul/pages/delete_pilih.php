<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$getpost = new Fungsidata();

$id_pilih = @$_REQUEST['id_pilih'];

if ($id_pilih != "") {
	foreach ($id_pilih as $row) {
		$kueri = $getpost->delete('pages', "WHERE id  = '" . $row . "'");
	}

	header("location:../../index.php?node=modul/pages/data&sukses");
} else {

	header("location:../../index.php?node=modul/pages/data&warning");
}
