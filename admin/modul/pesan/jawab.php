<?php
include "../inc/config.php";
$id = $_REQUEST['id'];
$kueri = mysql_query("select * from bukutamu where id_bukutamu = $id");
$data = mysql_fetch_array($kueri);
?>
<form name="form1" method="post" action="modul/bukutamu/fungsi_jawab.php">
  <table width="100%" border="0">
    <tr>
      <td><strong>JAWABAN BUKU TAMU</strong>        <hr size="1" color="#CCCCCC"></td>
    </tr>
    <tr>
      <td><strong>BUKU TAMU</strong></td>
    </tr>
    <tr>
      <td><strong>
        <?=$data['nama'];?>
      </strong> <br>
      <strong>
      <?=$data['email'];?>
      </strong> <br>
      "<?=$data['pesan'];?>"</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>JAWABAN</strong></td>
    </tr>
    <tr>
      <td><label for="jawaban"></label>
        <textarea name="jawaban" id="jawaban" cols="45" rows="5"><?=$data['jawaban'];?>
        </textarea>        
        <label for="content">
        <input name="id" type="hidden" id="id" value="<?=$_REQUEST['id'];?>">
      </label></td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Simpan">
      <input type="submit" name="button2" id="button2" value="Ulangi"></td>
    </tr>
    <tr>
      <td><a href="index.php?node=modul/bukutamu/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a></td>
    </tr>
  </table>
</form>
