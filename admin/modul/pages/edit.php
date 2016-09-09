<?php
include "../inc/config.php";
$id = @$_REQUEST['id'];
$kueri = mysql_query("select * from pages  where id_pages = $id");
$data = mysql_fetch_array($kueri);
?>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/pages/data">Pages</a></li>
  <li class="active">Edit Pages</li>
</ol>

<h3><span class="glyphicon glyphicon-book"></span> Edit Pages</h3>
<hr />

  <?php if(isset($_REQUEST['edit_sukses'])) { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> 
          <strong>Berhasil!</strong> Data sudah berhasil di update 
      </div>
  <?php } ?>

    <form class="form-horizontal" method="post" action="modul/pages/fungsi_edit.php">
      <div class="form-group">
        <label for="Judul" class="col-sm-2 control-label">Judul</label>
        <div class="col-sm-8">
          <input name="judul" type="judul" class="form-control" id="judul" value="<?php echo $data['judul'];?>" placeholder="Masukan Judul">
          <input name="id" type="hidden" id="id" value="<?php echo $_REQUEST['id'];?>" />
        </div>
      </div>

      <div class="form-group">
        <label for="content" class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <textarea name="content" id="content" cols="45" rows="8" class="mceEditor"><?php echo $data['content'];?></textarea>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
      <a href="index.php?node=modul/pages/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a>
    </form>
