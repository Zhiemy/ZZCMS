<?php

include "../../inc/dbs.php";
include "../../inc/fungsidata.php";

$fungsi = new Fungsidata();

$arr_data = array(
   'nama' => strip_tags($_POST['nama'], ""),
   'email' => strip_tags($_POST['email'], ""),
   'phone' => strip_tags($_POST['phone'], ""),
   'pesan' => strip_tags($_POST['pesan'], ""),
   'tanggal_dikirim' => date("Y-m-d h:i:s")
);

$fungsi->insert('message', $arr_data);

if (
   empty($_POST['nama']) ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['pesan']) ||
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
) {
   echo "No arguments Provided!";
   return false;
}

return true;
