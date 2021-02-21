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
  <li class="active">User</li>
</ol>

<div class="row">
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <a href="index.php?node=modul/user/form" class="btn btn-success">Tambah User</a>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <font size="5"><strong>User</strong></font>
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

<form name="form2" method="post" action="modul/user/delete_pilih.php">
  <table class="table table-bordered" width="100%" border="0" cellpadding="5" cellspacing="1">
    <thead>
      <th width="3%">&nbsp;</th>
      <th width="3%"><strong>
          <center>No</center>
        </strong></th>
      <th width="52%"><strong>
          <center>Nama User</center>
        </strong></th>
      <th width="8%"><strong>
          <center>Action</center>
        </strong></th>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $i = 0;
      $getpost = new Fungsidata();
      $arr_post = $getpost->select('user', '*', '');
      $itung_post = $arr_post->num_rows;

      if ($itung_post != 0) {

        while ($data = $arr_post->fetch_assoc()) {
          $i++;

      ?>
          <tr>
            <td><input name="id_pilih[]" type="checkbox" id="id_pilih[]" value="<?php echo $data['id']; ?>">
              <label for="id_pilih[]"></label>
            </td>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['nama_user']; ?></td>
            <td>
              <a href="index.php?node=modul/user/form&id=<?php echo $data['id']; ?>" class="btn btn-xs btn-info">
                <strong>Edit</strong>
              </a>

              <a href="javascript:confirmDelete('modul/user/delete.php?id=<?php echo $data['id']; ?>')" onClick="return confirmDelete(del);" class="btn btn-xs btn-danger">
                <strong>Hapus</strong>
              </a>
            </td>
          </tr>
        <?php } ?>
    </tbody>
  <?php } else { ?>
    <tr>
      <td colspan="6" bgcolor="#FFFFFF">
        <center>- Belum ada data -</center>
      </td>
    </tr>
  <?php } ?>
  </table>

  <input class="btn btn-danger" type="submit" name="button2" id="button2" value="Hapus yang ditandai">
</form>