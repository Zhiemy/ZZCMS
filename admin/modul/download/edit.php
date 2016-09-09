<?php
include "../inc/config.php";
$id = $_REQUEST['id'];
$kueri = mysql_query("select * from tabel_download where id_tabeldownload = $id");
$data = mysql_fetch_array($kueri);
?>
<form action="modul/download/fungsi_edit.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0">
    <tr>
      <td><strong>TAMBAH DATA DOWNLOAD FILES </strong>        <hr size="1" color="#CCCCCC"></td>
    </tr>
    <tr>
      <td><strong>JUDUL</strong></td>
    </tr>
    <tr>
      <td><label for="judul"></label>
      <input name="judul" type="text" id="judul" placeholder="Masukan Judul.." size="100" value="<?=$data['judul'];?>">
      <input name="id" type="hidden" id="id" value="<?=$_REQUEST['id'];?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>UPLOAD FILE </strong></td>
    </tr>
    <tr>
      <td><label>
        <input name="upload_file" type="file" id="upload_file" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>KATEGORI DOWNLOAD </strong></td>
    </tr>
    <tr>
      <td><select name="kategori" id="kategori">
	  <option value="0">- Pilih Kategori -</option>
	  <?php 
	  include "../inc/config.php";
	  $kueris = mysql_query("select * from kategori_download");
	  while($datas = mysql_fetch_array($kueris)){
	  ?>
	  <option <?php if($data['kategori_download'] == $datas['id_kategoridownload']){ ?> selected="selected" <?php } ?> value="<?php echo ($datas['id_kategoridownload']);?>"><?php echo ($datas['nama_kategori']);?></option>
	  <?php } ?>
      </select>
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Simpan" />
      <input type="submit" name="button2" id="button2" value="Ulangi" /></td>
    </tr>
    <tr>
      <td><a href="index.php?node=modul/halaman/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a></td>
    </tr>
  </table>
</form>
