<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$id = $_REQUEST['id'];
$id_file = $_REQUEST['id_file'];

$getpost = new Fungsidata();

$arr_post = $getpost->select('gallery_file', '*', "WHERE id = '" . $id_file . "'");
$row_post = $arr_post->fetch_assoc();

if ($row_post['nama_file']) {
	unlink("../../../upload/" . $row_post['nama_file']);
}

$kueri = $getpost->delete('gallery_file', "WHERE id  = '" . $id_file . "'");

if ($kueri) {
	header("location:../../index.php?node=modul/gallery/data_gallery&id=" . $id . "&sukses");
}
