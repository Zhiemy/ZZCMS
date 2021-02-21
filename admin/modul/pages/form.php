<ol class="breadcrumb">
   <li><a href="index.php">Home</a></li>
   <li><a href="index.php?node=modul/pages/data">Pages</a></li>
   <li class="active">Tambah Pages</li>
</ol>

<h3><span class="glyphicon glyphicon-book"></span> Tambah Pages</h3>
<hr />

<?php if (isset($_REQUEST['entry_sukses'])) { ?>
   <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
      </button>
      <strong>Berhasil!</strong> Data sudah berhasil di simpan
   </div>
<?php } ?>

<?php
if (isset($_REQUEST['id'])) {
   $getpost = new Fungsidata();
   $arr_pages = $getpost->select('pages', '*', "WHERE id = '" . $_REQUEST['id'] . "'");
   $row_pages = $arr_pages->fetch_assoc();
   $action = 'update';
} else {
   $action = 'insert';
}
?>

<form class="form-horizontal" method="post" action="modul/pages/insert_update.php">
   <input type="hidden" name="id" value="<?php echo @$_REQUEST['id']; ?>">
   <div class="form-group">
      <label for="Judul" class="col-sm-2 control-label">Judul</label>
      <div class="col-sm-8">
         <input name="judul" type="judul" class="form-control" id="judul" placeholder="Masukan Judul" value="<?php echo @$row_pages['judul']; ?>">
      </div>
   </div>

   <div class="form-group">
      <label for="content" class="col-sm-2 control-label">Content</label>
      <div class="col-sm-10">
         <textarea name="content" id="content" cols="45" rows="8" class="mceEditor"><?php echo @$row_pages['content']; ?></textarea>
      </div>
   </div>

   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button name="tombol" type="submit" class="btn btn-success" value="<?php echo $action; ?>">Simpan</button>
      </div>
   </div>
</form>

<a href="index.php?node=modul/pages/data"><strong>
      <font color="#FF0000">&laquo; Kembali</font>
   </strong></a>