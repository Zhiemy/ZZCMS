<form action="modul/download/fungsi_add.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0">
    <tr>
      <td><strong>TAMBAH DATA DOWNLOAD FILES </strong>        <hr size="1" color="#CCCCCC"></td>
    </tr>
    <tr>
      <td><strong>JUDUL</strong></td>
    </tr>
    <tr>
      <td><label for="judul"></label>
      <input name="judul" type="text" id="judul" placeholder="Masukan Judul.." size="100"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>UPLOAD FILE </strong></td>
    </tr>
    <tr>
      <td><input name="upload_file" type="file" id="upload_file" /></td>
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
	  $kueri = mysql_query("select * from kategori_download");
	  while($data = mysql_fetch_array($kueri)){
	  ?>
	  <option value="<?php echo ($data['id_kategoridownload']);?>"><?php echo ($data['nama_kategori']);?></option>
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
