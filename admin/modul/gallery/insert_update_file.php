<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$fungsi = new Fungsidata();
$id_gallery = $_POST['id_gallery'];
$userfile = $_FILES['userfile'];
$nama_file = $userfile['name'];
$tmp = $userfile['tmp_name'];

$arr_data = array(
   'id_gallery' => $_POST['id_gallery'],
   'keterangan' => strip_tags($_POST['keterangan'], ""),
   'tgl_entry' => date("Y-m-d h:i:s"),
   'entry_oleh' => $_SESSION['nama']
);

if ($nama_file != "") {
   move_uploaded_file($tmp, "../../../upload/$nama_file");
   $arr_data['nama_file'] = $nama_file;
}

if ($_POST['tombol'] == 'insert') {
   $action = $fungsi->insert('gallery_file', $arr_data);
   $where_id = '&id=' . $id_gallery;
} else {
   $id_file = $_POST['id_file'];
   $action = $fungsi->update('gallery_file', $arr_data, "WHERE id = '$id_file'");
   $where_id = '&id=' . $id_gallery . '&id_file=' . $id_file;
}

if ($action) {
   header("location:../../index.php?node=modul/gallery/form_file&entry_sukses" . $where_id);
}
