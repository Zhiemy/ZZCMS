<?php
include "../inc/config.php";
$id = @$_REQUEST['id'];
$kueri = mysql_query("select * from gallery  where id_gallery = $id");
$data = mysql_fetch_array($kueri);
?>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/gallery/data">Gallery</a></li>
  <li class="active">Edit Gallery</li>
</ol>

<h3><span class="glyphicon glyphicon-book"></span> Edit Gallery</h3>
<hr />

<?php if(isset($_REQUEST['edit_sukses'])) { ?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button> 
  <strong>Berhasil!</strong> Data sudah berhasil di update 
</div>
<?php } ?>

<form class="form-horizontal" method="post" action="modul/gallery/fungsi_edit.php">

  <div class="form-group">
    <label for="Judul" class="col-sm-2 control-label">Nama Gallery</label>
    <div class="col-sm-8">
      <input name="nama_gallery" type="judul" class="form-control" id="judul" placeholder="Masukan nama gallery" value="<?php echo $data['nama_gallery']; ?>">
      <input name="id" type="hidden" id="id" value="<?php echo $_REQUEST['id'];?>" />
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Keterangan Gallery</label>
    <div class="col-sm-10">
      <textarea name="keterangan" id="content" cols="45" rows="3" class="form-control" placeholder="Masukan keterangan gallery"><?php echo $data['keterangan_gallery']; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

<a href="index.php?node=modul/gallery/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a>