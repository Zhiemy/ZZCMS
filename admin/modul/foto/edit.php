<?php
include "../inc/config.php";
$id = $_REQUEST['id'];
$kueri = mysql_query("select * from foto where id_foto = $id");
$data = mysql_fetch_array($kueri);
?>
<form action="modul/foto/fungsi_edit.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0">
    <tr>
      <td><strong>EDIT DATA FOTO</strong>        <hr size="1" color="#CCCCCC"></td>
    </tr>
    <tr>
      <td><strong>FOTO</strong></td>
    </tr>
    <tr>
      <td><label for="judul"></label>
      <input name="foto" type="file" id="foto" size="50">
      <input name="id" type="hidden" id="id" value="<?=$_REQUEST['id'];?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>KETERANGAN FOTO</strong></td>
    </tr>
    <tr>
      <td><label for="rangkuman"></label>
        <label for="keterangan"></label>
      <input name="keterangan" type="text" id="keterangan" placeholder="Masukan keterangan foto..." value="<?=$data['keterangan'];?>" size="100"></td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Simpan">
      <input type="submit" name="button2" id="button2" value="Ulangi"></td>
    </tr>
    <tr>
      <td><a href="index.php?node=modul/foto/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a></td>
    </tr>
  </table>
</form>
