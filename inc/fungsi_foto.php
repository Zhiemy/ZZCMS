<?php
include "config.php";
	
	function page_title()
	{	
		echo 'Foto awkwa CMS';
	}
	
	function gallery(){
	
	echo '<div class="row">';

		$kueri = mysql_query("select * from gallery order by id_gallery desc");
		while($data = mysql_fetch_array($kueri)){
		
			$kueri_foto = mysql_query("select * from gallery_file where id_gallery = '".$data['id_gallery']."' order by id_gallery desc");
			$data_foto = mysql_fetch_array($kueri_foto);

		echo '<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="upload/'.$data_foto['nama_file'].'" alt="...">
			      <div class="caption">
			        <h5><a href="foto.php?id='.$data['id_gallery'].'">'.$data['nama_gallery'].'</a></h5>
			      </div>
			    </div>
			     </div>';
		
		}
	echo '</div>';

	}
	
	function foto($id){
	
		$kueri = mysql_query("select * from gallery_file where id_gallery = ".$id."");
		while($data = mysql_fetch_array($kueri))
		{
		echo "<center><img src=upload/$data[nama_file] width=640 style=padding:5px; /><br /><strong>$data[keterangan]</strong></center>";
		}

		echo "<p><a href=foto.php>Kembali ke gallery</a></p>";
	}
	