<?php
include "inc/dbs.php";
include "inc/fungsidata.php";
include "header.php";

//Panggil Class Fungsidata()
$getpost = new Fungsidata();

//Panggil fungsi select turunan dari class Fungsidata
$arr_post = $getpost->select('posts', '*', "");
$arr_pages = $getpost->select('pages', '*', "WHERE id = '11'");
$row_pages = $arr_pages->fetch_assoc();

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <div class="post-preview">
                <h2><?php echo $row_pages['judul']; ?></h2>
                <?php echo $row_pages['content']; ?>
            </div>
            <hr />

            <h1>Blog</h1>
            <hr />


            <?php if ($arr_post->num_rows > 0) { ?>
                <div class="post-preview">
                    <?php while ($row_post = $arr_post->fetch_assoc()) : ?>
                        <a href="posts.php?id=<?php echo $row_post['id']; ?>">
                            <h3><?php echo $row_post['judul']; ?></h3>
                        </a>

                        <p class="post-meta">Dikirim oleh <a href="#"><?php echo $row_post['entry_oleh']; ?></a></p>
                        <hr />
                    <?php endwhile; ?>
                </div>

            <?php } else { ?>
                <div class="alert alert-warning">Belum Tersedia</div>
            <?php } ?>
            <!-- Pager -->
        </div>
    </div>
</div>

<?php include "footer.php"; ?>