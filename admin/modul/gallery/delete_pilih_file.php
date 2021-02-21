<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$getpost = new Fungsidata();

$id_gallery = @$_REQUEST['id_gallery'];
$id_pilih = @$_REQUEST['id_pilih'];


if ($id_pilih != "") {
	foreach ($id_pilih as $row) {

		$arr_post = $getpost->select('gallery_file', '*', "WHERE id = '" . $row . "'");
		$row_post = $arr_post->fetch_assoc();

		if ($row_post['nama_file']) {
			unlink("../../../upload/" . $row_post['nama_file']);
		}

		$kueri = $getpost->delete('gallery_file', "WHERE id  = '" . $row . "'");
	}

	header("location:../../index.php?node=modul/gallery/data_gallery&id=" . $id_gallery . "&sukses");
} else {

	header("location:../../index.php?node=modul/gallery/data_gallery&id=" . $id_gallery . "&warning");
}
