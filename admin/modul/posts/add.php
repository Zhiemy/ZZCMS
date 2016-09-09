<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/posts/data">Post</a></li>
  <li class="active">Tambah Post</li>
</ol>

<h3><span class="glyphicon glyphicon-book"></span> Tambah Posts</h3>
<hr />

<?php if(isset($_REQUEST['entry_sukses'])) { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> 
          <strong>Berhasil!</strong> Data sudah berhasil di simpan
      </div>
<?php } ?>

<form class="form-horizontal" method="post" action="modul/posts/fungsi_add.php">
  <div class="form-group">
    <label for="Judul" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-8">
      <input name="judul" type="judul" class="form-control" id="judul" placeholder="Masukan Judul">
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
      <textarea name="content" id="content" cols="45" rows="8" class="mceEditor"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

<a href="index.php?node=modul/posts/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a>