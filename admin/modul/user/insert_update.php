<?php
session_start();
include "../../../inc/dbs.php";
include "../../../inc/fungsidata.php";

$fungsi = new Fungsidata();

$arr_data = array(
   'username' => strip_tags($_POST['username'], ""),
   'nama_user' => strip_tags($_POST['nama_user'], ""),
   'tgl_entry' => date("Y-m-d H:i:s"),
   'level' => $_POST['level']
);

if ($_POST['tombol'] == 'insert') {
   $arr_data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $action = $fungsi->insert('user', $arr_data);
} else {
   $id = $_POST['id'];

   if ($_POST['password']) {
      $arr_data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
   }
   $action = $fungsi->update('user', $arr_data, "WHERE id = '$id'");
   $where_id = '&id=' . $id;
}

if ($action) {
   header("location:../../index.php?node=modul/user/form&entry_sukses" . $where_id);
}
