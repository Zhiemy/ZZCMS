<?php
include "inc/dbs.php";
include "inc/fungsidata.php";
include "header.php";

$getpost = new Fungsidata();
$arr_pages = $getpost->select('pages', '*', 'WHERE id = 12');
$row_pages = $arr_pages->fetch_assoc();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h2><?php echo $row_pages['judul']; ?></h2>
            <?php echo $row_pages['content']; ?>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>