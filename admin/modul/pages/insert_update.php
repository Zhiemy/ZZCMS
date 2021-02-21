<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$fungsi = new Fungsidata();

$arr_data = array(
   'judul' => strip_tags($_POST['judul'], ""),
   'content' => $_POST['content'],
   'tgl_entry' => date("Y-m-d h:i:s"),
   'entry_oleh' => $_SESSION['nama']
);

if ($_POST['tombol'] == 'insert') {
   $action = $fungsi->insert('pages', $arr_data);
} else {
   $id = $_POST['id'];
   $action = $fungsi->update('pages', $arr_data, "WHERE id = '$id'");
   $where_id = '&id=' . $id;
}

if ($action) {
   header("location:../../index.php?node=modul/pages/form&entry_sukses" . $where_id);
}
