<!-- Testing commit lagi  -->
<?php 
include "inc/config.php";
include "inc/fungsi_beranda.php";
include "header.php";

?>
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <div class="post-preview">
                    <?php data(11); ?>
                </div>
                <hr />

                <h1>Blog</h1>
                <hr />

                <div class="post-preview">
                    <?php berita(); ?>
                </div>
                <!-- Pager -->
            </div>
        </div>
</div>

<?php include "footer.php"; ?>