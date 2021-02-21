<script type="text/JavaScript">

  function confirmDelete(delUrl) {
  if (confirm("Yakin untuk menghapus ?")) {
    document.location = delUrl;
  }
  return false;

}
</script>

<?php
$getpost = new Fungsidata();
$arr_post = $getpost->select('gallery', '*', "where id = '" . $_REQUEST['id'] . "'");
$row_post = $arr_post->fetch_assoc();
?>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/gallery/data">Gallery</a></li>
  <li class="active"><?php echo $row_post['nama']; ?></a></li>
</ol>

<div class="row">
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <a href="index.php?node=modul/gallery/data" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a href="index.php?node=modul/gallery/form_file&id=<?php echo $_REQUEST['id']; ?>" class="btn btn-success">Tambah Data</a>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <font size="5"><strong><?php echo $row_post['nama']; ?></strong></font>
  </div>
</div>

<hr />

<?php if (isset($_REQUEST['warning'])) { ?>
  <div class="alert alert-warning alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>Oops!</strong> Tidak ada yang dichecklist
  </div>
<?php } ?>

<?php if (isset($_REQUEST['sukses'])) { ?>
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
      <th width="3%"><strong>
          <center>No</center>
        </strong></th>
      <th width="5%"><strong>
          <center>File</center>
        </strong></th>
      <th width="40%"><strong>
          <center>Keterangan</center>
        </strong></th>
      <th width="12%"><strong>
          <center>Tanggal entry</center>
        </strong></th>
      <th width="10%"><strong>
          <center>Di entry oleh</center>
        </strong></th>
      <th width="8%"><strong>
          <center>Action</center>
        </strong></th>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $getpost = new Fungsidata();
      $arr_post = $getpost->select('gallery_file', '*', "WHERE id_gallery = '" . $_REQUEST['id'] . "'");
      $itung_post = $arr_post->num_rows;

      if ($itung_post > 0) {

        while ($data = $arr_post->fetch_assoc()) {
          $i++;

      ?>
          <tr>
            <td><input name="id_pilih[]" type="checkbox" id="id_pilih[]" value="<?php echo $data['id']; ?>">
              <input name="id_gallery" type="hidden" id="id_gallery" value="<?php echo $_REQUEST['id']; ?>" />
              <label for="id_pilih[]"></label>
            </td>
            <td><?php echo $i; ?></td>
            <td><img src="../upload/<?php echo ($data['nama_file']) ? $data['nama_file'] : 'images.jpg'; ?>" width="100%" /></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td><?php echo $data['tgl_entry']; ?></td>
            <td><?php echo $data['entry_oleh']; ?></td>
            <td>
              <a href="index.php?node=modul/gallery/form_file&id=<?php echo $data['id_gallery']; ?>&id_file=<?php echo $data['id']; ?>" class="btn btn-xs btn-info">
                <strong>Edit</strong>
              </a>

              <a href="javascript:confirmDelete('modul/gallery/delete_file.php?id=<?php echo $data['id_gallery']; ?>&id_file=<?php echo $data['id']; ?>')" onClick="return confirmDelete(del);" class="btn btn-xs btn-danger">
                <strong>Hapus</strong>
              </a>
            </td>
          </tr>
        <?php } ?>
    </tbody>
  <?php } else { ?>
    <tr>
      <td colspan="7" bgcolor="#FFFFFF">
        <center>- Belum ada data -</center>
      </td>
    </tr>
  <?php } ?>
  </table>

  <input class="btn btn-danger" type="submit" name="button2" id="button2" value="Hapus yang ditandai">
</form>