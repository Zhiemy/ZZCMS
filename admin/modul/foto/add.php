<form action="modul/foto/fungsi_add.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0">
    <tr>
      <td><strong>TAMBAH DATA FOTO</strong>        <hr size="1" color="#CCCCCC"></td>
    </tr>
    <tr>
      <td><strong>FOTO</strong></td>
    </tr>
    <tr>
      <td><label for="judul"></label>
      <input name="foto" type="file" id="foto" size="50"></td>
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
      <input placeholder="Masukan keterangan foto..." name="keterangan" type="text" id="keterangan" size="100"></td>
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
