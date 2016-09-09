<script type="text/JavaScript">
 
function confirmDelete(delUrl) {
  if (confirm("Yakin untuk menghapus ?")) {
    document.location = delUrl;
  }
}
</script>
<table width="100%" border="0">
  <tr>
    <td><strong>MANAGEMENT FOTO</strong></td>
  </tr>
  <tr>
    <td><form name="form1" method="post" action="index.php?node=modul/foto/add">
      <input type="submit" name="button" id="button" value="Tambah Data">
    </form>      <hr size="1" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><form name="form2" method="post" action="modul/foto/delete_pilih.php">
      <table bgcolor="#999999" width="100%" border="0" cellpadding="5" cellspacing="1">
        <tr>
          <td width="3%" bgcolor="#CCCCCC"><strong><center>No</center></strong></td>
          <td width="10%" bgcolor="#CCCCCC"><strong><center>
            Foto
          </center></strong></td>
          <td width="71%" bgcolor="#CCCCCC"><strong>
            <center>
            Keterangan
          </center></strong></td>
          <td width="16%" bgcolor="#CCCCCC"><strong>
            <center>Action</center></strong><strong></strong></td>
          </tr>
        <?php
		include "../inc/config.php";
		$i = 0;
		$kueri_itung = mysql_query("select count(*) from foto order by id_foto desc");
		$data_itung = mysql_fetch_array($kueri_itung);
		
		if($data_itung[0] != 0){
			
		$kueri = mysql_query("select * from foto order by id_foto desc");
		while($data = mysql_fetch_array($kueri)){
		$i++;
		
		?>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><center><?=$i;?></center></td>
          <td bgcolor="#FFFFFF"><img src="../foto/<?=$data['nama_file'];?>" width="100"></td>
          <td valign="middle" bgcolor="#FFFFFF"><center><?=$data['keterangan'];?></center></td>
          <td bgcolor="#FFFFFF"><center><a href="index.php?node=modul/foto/edit&id=<?=$data['id_foto'];?>"><font color="#009900"><strong>Edit</strong></font></a> &nbsp;- &nbsp;<a href="javascript:confirmDelete('modul/foto/delete.php?id=<?=$data['id_foto'];?>')" onClick="confirmDelete();"><font color="#FF0000"><strong>Hapus</strong></font></a></center></td>
          </tr>
        <?php } ?>
        <?php }else{ ?>
         <tr>
          <td colspan="4" bgcolor="#FFFFFF"><center>- Belum ada data -</center></td>
          </tr>
         <?php } ?>
      </table>
    </form></td>
  </tr>
</table>
