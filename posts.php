<?php
include "inc/dbs.php";
include "inc/fungsidata.php";
include "header.php";

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
//Panggil Class Fungsidata()
$getpost = new Fungsidata();
?>

<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?php

				if (!$id) {
					
					$arr_post = $getpost->select('posts', '*', '');

					if($arr_post->num_rows > 0){
					while ($row_post = $arr_post->fetch_assoc()) :

				?>
						<a href="posts.php?id=<?php echo $row_post['id']; ?>">
							<h3><?php echo $row_post['judul']; ?></h3>
						</a>

						<p class="post-meta">Dikirim oleh <a href="#"><?php echo $row_post['entry_oleh']; ?></a></p>
						<hr />
					<?php
					endwhile;
				}else{
					echo '<div class="alert alert-warning">Belum Tersedia</div>';
				}
				} else {
					$arr_post_detail 	= $getpost->select('posts', '*', "WHERE id = '" . $id . "'");
					$row_post_detail	= $arr_post_detail->fetch_assoc();
					?>
					<h2><?php echo $row_post_detail['judul']; ?></h2>
					<?php echo $row_post_detail['content']; ?>
					<p class="post-meta">Dikirim oleh <a href="#"><?php echo $row_post_detail['entry_oleh']; ?></a></p>
					<strong><a href="posts.php">&laquo; Kembali</a></strong>
				<?php } ?>
			</div>
		</div>
	</div>
</article>

<?php include "footer.php"; ?>