<script type="text/JavaScript">

function confirmDelete(delUrl) {
  if (confirm("Yakin untuk menghapus ?")) {
    document.location = delUrl;
  }
  return false;

}
</script>

<?php
$kueri = mysql_query("select * from gallery where id_gallery = '".$_REQUEST['id']."'");
$data = mysql_fetch_array($kueri);

?>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/gallery/data">Gallery</a></li>
  <li class="active"><?php echo $data['nama_gallery']; ?></a></li>
</ol>

<div class="row">
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
     <a href="index.php?node=modul/gallery/data" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a href="index.php?node=modul/gallery/add_file&id=<?php echo $_REQUEST['id']; ?>" class="btn btn-success">Tambah Data</a>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <font size="5"><strong><?php echo $data['nama_gallery']; ?></strong></font>
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

<form name="form2" method="post" action="modul/gallery/delete_pilih_file.php">
  <table class="table table-bordered" width="100%" border="0" cellpadding="5" cellspacing="1">
    <thead>
      <th width="3%">&nbsp;</th>
      <th width="3%"><strong><center>No</center></strong></th>
      <th width="5%"><strong><center>File</center></strong></th>
      <th width="40%"><strong><center>Keterangan</center></strong></th>
      <th width="12%"><strong><center>Tanggal entry</center></strong></th>
      <th width="10%"><strong><center>Di entry oleh</center></strong></th>
      <th width="8%"><strong><center>Action</center></strong></th>
    </thead>
    <tbody>
      <?php
      include "../inc/config.php";
      $i = 0;
      $kueri_itung = mysql_query("select count(*) from gallery_file where id_gallery = '".$_REQUEST['id']."' order by id_gallery_file desc");
      $data_itung = mysql_fetch_array($kueri_itung);

      if($data_itung[0] != 0){

        $kueri = mysql_query("select * from gallery_file where id_gallery = '".$_REQUEST['id']."' order by id_gallery_file desc");
        while($data = mysql_fetch_array($kueri)){
          $i++;

          ?>
          <tr>
            <td><input name="id_pilih[]" type="checkbox" id="id_pilih[]" value="<?php echo $data['id_gallery_file'];?>">
              <input name="id_gallery" type="hidden" id="id_gallery" value="<?php echo $_REQUEST['id'];?>" />
              <label for="id_pilih[]"></label></td>
              <td><?php echo $i;?></td>
              <td><img src="../upload/<?php echo $data['nama_file'];?>" width="100" /></td>
              <td><?php echo $data['keterangan']; ?></td>
              <td><?php echo $data['tgl_entry'];?></td>
              <td><?php echo $data['entry_oleh'];?></td>
              <td>
                <a href="index.php?node=modul/gallery/edit_file&id=<?php echo $data['id_gallery']; ?>&id_gallery_file=<?php echo $data['id_gallery_file'];?>" class="btn btn-xs btn-info">
                  <strong>Edit</strong>
                </a> 

                <a href="javascript:confirmDelete('modul/gallery/delete_file.php?id=<?php echo $data['id_gallery']; ?>&id_gallery_file=<?php echo $data['id_gallery_file'];?>')" onClick="return confirmDelete(del);" class="btn btn-xs btn-danger">
                  <strong>Hapus</strong>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <?php }else{ ?>
          <tr>
            <td colspan="7" bgcolor="#FFFFFF"><center>- Belum ada data -</center></td>
          </tr>
          <?php } ?>
        </table>

        <input class="btn btn-danger" type="submit" name="button2" id="button2" value="Hapus yang ditandai">
      </form>
