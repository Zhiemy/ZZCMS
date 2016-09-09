<script type="text/JavaScript">

function confirmDelete(delUrl) {
  if (confirm("Yakin untuk menghapus ?")) {
    document.location = delUrl;
  }

  return false;
}
</script>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Pages</li>
</ol>

<div class="row">

  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <font size="5"><strong>Message</strong></font>
  </div>
</div>

<hr />

<?php if(isset($_REQUEST['warning'])) { ?>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button> 
  <strong>Oops!</strong> Tidak ada yang dichecklist
</div>
<?php } ?>

<?php if(isset($_REQUEST['sukses'])) { ?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button> 
  <strong>Berhasil!</strong> Data berhasil dihapus
</div>
<?php } ?>

<form name="form2" method="post" action="modul/message/delete_pilih.php">
  <table class="table table-bordered" width="100%" border="0" cellpadding="5" cellspacing="1">
    <thead>
      <th width="1%">&nbsp;</th>
      <th width="2%"><strong><center>No</center></strong></th>
      <th width="77%"><strong><center>Judul</center></strong></th>
      <th width="15%"><strong><center>Tanggal</center></strong></th>
      <th width="5%"><strong><center>Action</center></strong></th>
    </thead>
    <tbody>
      <?php
      include "../inc/config.php";
      $i = 0;
      $kueri_itung = mysql_query("select count(*) from message order by id_message desc");
      $data_itung = mysql_fetch_array($kueri_itung);

      if($data_itung[0] != 0){

        $kueri = mysql_query("select * from message order by id_message desc");
        while($data = mysql_fetch_array($kueri)){
          $i++;

          ?>
          <tr>
            <td><input name="id_pilih[]" type="checkbox" id="id_pilih[]" value="<?php echo $data['id_message'];?>">
              <label for="id_pilih[]"></label></td>
              <td><?php echo $i;?></td>
              <td><strong>Dari</strong> : <a href="#" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"><?php echo $data['nama'];?></a>

                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Detail Message</h4>
                      </div>
                      <div class="modal-body">
                        <ul>
                          <li><?php echo $data['nama']; ?></li>
                          <li><?php echo $data['email']; ?></li>
                          <li><?php echo $data['phone']; ?></li>
                          <li><?php echo $data['pesan']; ?></li>
                        </ul>
                      </div>
                     
                    </div>
                  </div>
                </div>

              </td>
              <td><?php echo $data['tanggal_dikirim']; ?></td>
              <td>
                <a href="javascript:confirmDelete('modul/message/delete.php?id=<?php echo $data['id_message'];?>')" onClick="confirmDelete(del);" class="btn btn-xs btn-danger">
                  <strong>Hapus</strong>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <?php }else{ ?>
          <tr>
            <td colspan="6" bgcolor="#FFFFFF"><center>- Belum ada data -</center></td>
          </tr>
          <?php } ?>
        </table>

        <input class="btn btn-danger" type="submit" name="button2" id="button2" value="Hapus yang ditandai">
      </form>
