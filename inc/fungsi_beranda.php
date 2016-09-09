<?php
include "config.php";

	function page_title()
	{	
		echo 'Beranda awkwa CMS';
	}
	
	function berita(){
	
		$kueri = mysql_query("select * from posts limit 2");
		while($data = mysql_fetch_array($kueri)){
		$tanggal = date("F d, Y", strtotime($data['tgl_entry']));
		echo '<a href="posts.php?id='.$data['id_posts'].'">
				<h3>'.$data['judul'].'</h3>
			  </a>';
		echo '<p class="post-meta">Dikirim oleh <a href="#">'.$data['entry_oleh'].'</a> '.$tanggal.'</p>';
		echo "<hr size=1 color=#ccc />";
		}
	}
	
	function data($id){
	
		$kueri = mysql_query("select * from pages where id_pages = ".$id."");
		$data = mysql_fetch_array($kueri);
		
		echo "<h2>$data[judul]</h2>";
		echo "$data[content]";
	}