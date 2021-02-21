<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$fungsi = new Fungsidata();

$arr_data = array(
   'nama' => strip_tags($_POST['nama'], ""),
   'keterangan' => strip_tags($_POST['keterangan'], ""),
   'tgl_entry' => date("Y-m-d h:i:s"),
   'entry_oleh' => $_SESSION['nama']
);

if ($_POST['tombol'] == 'insert') {
   $action = $fungsi->insert('gallery', $arr_data);
} else {
   $id = $_POST['id'];
   $action = $fungsi->update('gallery', $arr_data, "WHERE id = '$id'");
   $where_id = '&id=' . $id;
}

if ($action) {
   header("location:../../index.php?node=modul/gallery/form&entry_sukses" . $where_id);
}
