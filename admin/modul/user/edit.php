<?php
include "../inc/config.php";
$id = $_REQUEST['id'];
$kueri = mysql_query("select * from user where id_user = $id");
$data = mysql_fetch_array($kueri);
?>
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?node=modul/user/data">User</a></li>
  <li class="active">Edit User</li>
</ol>

<h3><span class="glyphicon glyphicon-user"></span> Edit User</h3>
<hr />

<?php if(isset($_REQUEST['entry_sukses'])) { ?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button> 
  <strong>Berhasil!</strong> Data sudah berhasil di simpan
</div>
<?php } ?>
<form class="form-horizontal" method="post" action="modul/user/fungsi_edit.php">

  <div class="form-group">
    <label for="Username" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-6">
      <input name="username" type="text" class="form-control" id="username" placeholder="Masukan Username" value="<?php echo $data['username']; ?>">
      <input name="id" type="hidden" id="id" value="<?php echo $_REQUEST['id'];?>"></td>
    </div>
  </div>

  <div class="form-group">
    <label for="Username" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
      <input name="password" type="pasword" class="form-control" id="password" size="100" placeholder="Masukan Password">
    </div>
  </div>

  <div class="form-group">
    <label for="Username" class="col-sm-2 control-label">Nama User</label>
    <div class="col-sm-8">
      <input name="nama_user" type="text" class="form-control" id="nama_user" placeholder="Masukan Nama User" value="<?php echo $data['nama_user']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="Username" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-3">
      <select name="level" id="level" class="form-control">
        <option>- Pilih level -</option>
        <option <?php if($data['level'] == 0){ ?> selected="selected" <?php } ?> value="0">Super Administrator</option>
        <option <?php if($data['level'] == 1){ ?> selected="selected" <?php } ?> value="1">Author</option>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

<a href="index.php?node=modul/user/data"><strong><font color="#FF0000">&laquo; Kembali</font></strong></a>
