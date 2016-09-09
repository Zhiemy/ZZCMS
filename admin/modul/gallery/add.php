<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/gallery/data">Gallery</a></li>
  <li class="active">Tambah Gallery</li>
</ol>

<h3><span class="glyphicon glyphicon-book"></span> Tambah Gallery</h3>
<hr />

<?php if(isset($_REQUEST['entry_sukses'])) { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> 
          <strong>Berhasil!</strong> Data sudah berhasil di simpan
      </div>
<?php } ?>

<form class="form-horizontal" method="post" action="modul/gallery/fungsi_add.php">
  
  <div class="form-group">
    <label for="Judul" class="col-sm-2 control-label">Nama Gallery</label>
    <div class="col-sm-8">
      <input name="nama_gallery" type="judul" class="form-control" id="judul" placeholder="Masukan nama gallery">
      
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Keterangan Gallery</label>
    <div class="col-sm-10">
      <textarea name="keterangan" id="content" cols="45" rows="3" class="form-control" placeholder="Masukan keterangan gallery"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

<a href="index.php?node=modul/gallery/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a>