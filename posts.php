<?php 
include "inc/config.php";
include "inc/fungsi_posts.php";
include "header.php";
?>

<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php 
                      $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
                      if(!$id){

                        semua(); 

                      }else{

                        detail($id); 

                      }
                    ?>  
                </div>
            </div>
        </div>
</article>		
            
<?php include "footer.php"; ?>
