<?php
include "header.php";
?>

<div class="container">
   <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
         <p>Jangan sungkan untuk mengirim kritik dan saran anda, untuk membuat awkwa CMS ini lebih baik lagi</p>

         <?php
         $sukses = isset($_REQUEST['sukses']) ? $_REQUEST['sukses'] : '';
         $gagal = isset($_REQUEST['gagal']) ? $_REQUEST['gagal'] : '';
         if ($sukses) {
         ?>

            <div class="alert alert-warning alert-dismissible fade in" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
               <strong>Oops!</strong>
               Form harus diisi dengan benar yah
            </div>
         <?php } ?>

         <?php if ($gagal) { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
               <strong>Terima kasih!</strong>
               Pesan anda sudah terkirim
            </div>
         <?php } ?>

         <form id="contactForm" method="post">
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Name</label>
                  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" id="nama" required data-validation-required-message="Silahkan Masukkan nama lengkap anda.">
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Silahkan masukkan email anda">
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Nomor Handphone</label>
                  <input name="phone" type="tel" class="form-control" placeholder="Nomor Handphone" id="phone" required data-validation-required-message="Silahkan masukkan nomor handphone anda">
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Message</label>
                  <textarea name="pesan" rows="5" class="form-control" placeholder="Message" id="pesan" required data-validation-required-message="Silahkan masukkan pesan"></textarea>
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
               <div class="form-group col-xs-12">
                  <button type="submit" class="btn btn-default"><span class="fa fa-send"></span> Kirim Pesan</button>
               </div>
            </div>
         </form>

      </div>
   </div>
</div>

<?php include "footer.php"; ?>