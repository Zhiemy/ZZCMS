<script type="text/JavaScript">
 
function confirmDelete(delUrl) {
  if (confirm("Yakin untuk menghapus ?")) {
    document.location = delUrl;
  }
}
</script>

<table width="100%" border="0">
  <tr>
    <td><strong>MANAGEMENT BUKU TAMU</strong></td>
  </tr>
  <tr>
    <td><hr size="1" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><form name="form2" method="post" action="modul/bukutamu/delete_pilih.php">
      <table bgcolor="#999999" width="100%" border="0" cellpadding="5" cellspacing="1">
        <tr>
          <td width="3%" bgcolor="#CCCCCC">&nbsp;</td>
          <td width="3%" bgcolor="#CCCCCC"><strong><center>No</center></strong></td>
          <td bgcolor="#CCCCCC"><strong><center>
            Pesan
          </center></strong><strong></strong><strong><center></center></strong></td>
          <td bgcolor="#CCCCCC"><strong><center>Jawaban</center></strong></td>
          <td width="10%" bgcolor="#CCCCCC"><strong><center>Action</center></strong></td>
        </tr>
        <?php
		include "../inc/config.php";
		$i = 0;
		$kueri_itung = mysql_query("select count(*) from bukutamu order by id_bukutamu desc");
		$data_itung = mysql_fetch_array($kueri_itung);
		
		if($data_itung[0] != 0){
			
		$kueri = mysql_query("select * from bukutamu order by id_bukutamu desc");
		while($data = mysql_fetch_array($kueri)){
		$i++;
		
		?>
        <tr>
          <td bgcolor="#FFFFFF"><input name="id_pilih[]" type="checkbox" id="id_pilih[]" value="<?=$data['id_bukutamu'];?>">
            <label for="id_pilih[]"></label></td>
          <td bgcolor="#FFFFFF"><?=$i;?></td>
          <td bgcolor="#FFFFFF"><strong><?=$data['nama'];?></strong><br><strong><?=$data['email'];?></strong><br><?=$data['pesan'];?></td>
          <td bgcolor="#FFFFFF">
          <?php 
		  if($data['jawaban'] == ""){ 
		  ?>
          <strong><center><a href="index.php?node=modul/bukutamu/jawab&id=<?=$data['id_bukutamu'];?>">Beri jawaban</a></center></strong>
          <?php }else{ 
		  echo "<center><a href=index.php?node=modul/bukutamu/jawab&id=$data[id_bukutamu]>".$data['jawaban']."</a></center> "; 
		   } ?>
          </td>
          <td bgcolor="#FFFFFF"><a href="javascript:confirmDelete('modul/bukutamu/delete.php?id=<?=$data['id_bukutamu'];?>')" onClick="confirmDelete();"><font color="#FF0000"><strong><center>Hapus</center></strong></font></a></td>
        </tr>
        <?php } ?>
        <?php }else{ ?>
         <tr>
          <td colspan="5" bgcolor="#FFFFFF"><center>- Belum ada data -</center></td>
          </tr>
         <?php } ?>
      </table>
      <br>
      <input type="submit" name="button2" id="button2" value="Hapus yang ditandai">
    </form></td>
  </tr>
</table>
