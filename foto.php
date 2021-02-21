<?php
include "inc/dbs.php";
include "inc/fungsidata.php";
include "header.php";

$getpost = new Fungsidata();
$arr_foto = $getpost->select("gallery", '*', '');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<?php
			$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
			if (!$id) {
			?>

				<?php

				if ($arr_foto->num_rows > 0) {

					while ($row_foto = $arr_foto->fetch_assoc()) :
						$arr_foto_detail = $getpost->select("gallery_file", '*', "WHERE id_gallery = '" . $row_foto['id'] . "'");
						$row_foto_detail = $arr_foto_detail->fetch_assoc();
				?>
						<div class="row">
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<a href="foto.php?id=<?php echo $row_foto['id']; ?>"><img src="upload/<?php echo ($row_foto_detail['nama_file']) ? $row_foto_detail['nama_file'] : 'images.jpg'; ?>" alt="<?php echo $row_foto_detail['keterangan']; ?>"></a>
									<div class="caption">
										<h5><a href="foto.php?id=<?php echo $row_foto['id']; ?>"><?php echo $row_foto['nama']; ?></a></h5>
										<p><?php echo $row_foto['keterangan']; ?></p>
									</div>
								</div>
							</div>
						</div>
				<?php endwhile;
				} else {
					echo '<div class="alert alert-warning">Belum Tersedia</div>';
				} ?>

				<?php
			} else {
				echo '<div class="row">';
				$arr_foto_detail = $getpost->select("gallery_file", '*', "WHERE id_gallery = '" . $id . "'");
				while ($row_foto_detail = $arr_foto_detail->fetch_assoc()) :

				?>

					<div class="col-md-4">
						<div class="thumbnail">
							<img src="upload/<?php echo ($row_foto_detail['nama_file']) ? $row_foto_detail['nama_file'] : 'images.jpg'; ?>" alt="<?php echo $row_foto_detail['keterangan']; ?>">
							<div class="caption">
								<h5>
									<?php echo ($row_foto_detail['keterangan']) ? $row_foto_detail['keterangan'] : 'Belum tersedia'; ?>
								</h5>
								<p><?php echo $row_foto_detail['keterangan']; ?></p>
							</div>
						</div>
					</div>

			<?php
				endwhile;
				echo '</div>';
			}
			?>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>