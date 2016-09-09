<script type="text/JavaScript">
 
function confirmDelete(delUrl) {
  if (confirm("Yakin untuk menghapus ?")) {
    document.location = delUrl;
  }
}
</script>
<table width="100%" border="0">
  <tr>
    <td><strong>MANAGEMENT DOWNLOAD FILES</strong></td>
  </tr>
  <tr>
    <td><form name="form1" method="post" action="index.php?node=modul/download/add">
      <input type="submit" name="button" id="button" value="Tambah Data">
    </form>      <hr size="1" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><form name="form2" method="post" action="modul/download/delete_pilih.php">
      <table bgcolor="#999999" width="100%" border="0" cellpadding="5" cellspacing="1">
        <tr>
          <td width="3%" bgcolor="#CCCCCC">&nbsp;</td>
          <td width="3%" bgcolor="#CCCCCC"><strong><center>No</center></strong></td>
          <td width="24%" bgcolor="#CCCCCC"><strong>
            <center>
              JUDUL
            </center>
            </strong><strong></strong><strong><center></center></strong></td>
          <td width="29%" bgcolor="#CCCCCC"><div align="center"><strong>DOWNLOAD FILE </strong></div></td>
		   <td width="27%" bgcolor="#CCCCCC"><div align="center"><strong>KATEGORI </strong></div></td>
          <td width="14%" bgcolor="#CCCCCC"><strong>
            <center>Action</center></strong></td>
        </tr>
        <?php
		include "../inc/config.php";
		$i = 0;
		$kueri_itung = mysql_query("select count(*) from tabel_download order by id_tabeldownload desc");
		$data_itung = mysql_fetch_array($kueri_itung);
		
		if($data_itung[0] != 0){
			
		$kueri = mysql_query("select * from tabel_download order by id_tabeldownload desc");
		while($data = mysql_fetch_array($kueri)){
		$i++;
		
			$kueri_kategori = mysql_query("select * from kategori_download where id_kategoridownload = '$data[kategori_download]'");
			$data_kategori = mysql_fetch_array($kueri_kategori);
		
		?>
        <tr>
          <td bgcolor="#FFFFFF"><input name="id_pilih[]" type="checkbox" id="id_pilih[]" value="<?=$data['id_tabeldownload'];?>">
            <label for="id_pilih[]"></label></td>
          <td bgcolor="#FFFFFF"><div align="center">
            <?=$i;?>
          </div></td>
          <td bgcolor="#FFFFFF"><?=$data['judul'];?></td>
          <td bgcolor="#FFFFFF"><a href="../uploads/<?php echo $data['nama_file'];?>"><?=$data['nama_file'];?></a></td>        
		  <td bgcolor="#FFFFFF"><?=$data_kategori['nama_kategori'];?></td>  
		  <td bgcolor="#FFFFFF"><div align="center"><a href="index.php?node=modul/download/edit&amp;id=<?=$data['id_tabeldownload'];?>"><font color="#009900"><strong>Edit</strong></font></a> &nbsp;- &nbsp;<a href="javascript:confirmDelete('modul/download/delete.php?id=<?=$data['id_tabeldownload'];?>')" onClick="confirmDelete();"><font color="#FF0000"><strong>Hapus</strong></font></a></div></td>
        </tr>
        <?php } ?>
        <?php }else{ ?>
         <tr>
          <td colspan="6" bgcolor="#FFFFFF"><center>- Belum ada data -</center></td>
          </tr>
         <?php } ?>
      </table>
      <br>
      <input type="submit" name="button2" id="button2" value="Hapus yang ditandai">
    </form></td>
  </tr>
</table>
