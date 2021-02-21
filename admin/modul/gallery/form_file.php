<?php
$getpost = new Fungsidata();
$arr = $getpost->select('gallery', '*', "WHERE id = '" . $_REQUEST['id'] . "'");
$row = $arr->fetch_assoc();



if (isset($_REQUEST['id_file'])) {
   $getpost = new Fungsidata();
   $arr_file = $getpost->select('gallery_file', '*', "WHERE id = '" . @$_REQUEST['id_file'] . "'");
   $row_file = $arr_file->fetch_assoc();
   $action = 'update';
} else {
   $action = 'insert';
}

?>

<ol class="breadcrumb">
   <li><a href="index.php">Home</a></li>
   <li><a href="index.php?node=modul/gallery/data">Gallery</a></li>
   <li><a href="index.php?node=modul/gallery/data_gallery&id=<?php echo $_REQUEST['id']; ?>"><?php echo @$row['nama']; ?></a></li>
   <li class="active">Tambah File</li>
</ol>

<h3><span class="glyphicon glyphicon-book"></span> Tambah File</h3>
<hr />

<?php if (isset($_REQUEST['entry_sukses'])) { ?>
   <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
      </button>
      <strong>Berhasil!</strong> Data sudah berhasil di simpan
   </div>
<?php } ?>



<form class="form-horizontal" method="post" action="modul/gallery/insert_update_file.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
      <label for="userfile" class="col-sm-2 control-label">Upload File</label>
      <div class="col-sm-8">
         <input name="userfile" type="file" id="userfile">
         <input name="id_gallery" type="hidden" id="id_gallery" value="<?php echo $_REQUEST['id']; ?>" />
         <input name="id_file" type="hidden" id="id_file" value="<?php echo $_REQUEST['id_file']; ?>" />

         <?php if (@$row_file['nama_file']) : ?>
            <br>
            <img src="../upload/<?php echo $row_file['nama_file']; ?>" width="100" alt="">
         <?php endif; ?>
      </div>
   </div>

   <div class="form-group">
      <label for="keterangan" class="col-sm-2 control-label">Keterangan Gallery</label>
      <div class="col-sm-10">
         <textarea name="keterangan" id="keterangan" cols="45" rows="3" class="form-control" placeholder="Masukan keterangan gallery"><?php echo @$row_file['keterangan']; ?></textarea>
      </div>
   </div>

   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button name="tombol" type="submit" class="btn btn-success" value="<?php echo $action; ?>">Simpan</button>
      </div>
   </div>
</form>

<a href="index.php?node=modul/gallery/data_gallery&id=<?php echo $_REQUEST['id']; ?>"><strong>
      <font color="#FF0000">&laquo; Kembali</font>
   </strong></a>