<?php 
include "inc/config.php";
include "inc/fungsi_foto.php";
include "header.php";
?>
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
      			<?php 
      			$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
      			if(!$id){
      			gallery();
      			}else{
      			foto($id);
      			}
      			?>
          </div>
     </div>
 </div>
			     
<?php include "footer.php"; ?>
