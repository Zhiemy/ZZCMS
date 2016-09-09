<?php
include "config.php";

	function page_title()
	{	
		echo 'Berita awkwa CMS';
	}

	function detail($id){
	
		$kueri = mysql_query("select * from posts where id_posts = ".$id."");
		$data = mysql_fetch_array($kueri);
		
		echo "<h2>$data[judul]</h2>";
		echo "$data[content]";
		echo "<strong><a href=posts.php>&laquo; Kembali</a></strong> ";
	}
	
	function semua(){
	
		$kueri = mysql_query("select * from posts");
		while($data = mysql_fetch_array($kueri)){
		$tanggal = date("F d, Y", strtotime($data['tgl_entry']));
		echo "<h2><a href=posts.php?id=$data[id_posts]>$data[judul]</a></h2>";
		echo '<p class="post-meta">Dikirim oleh <a href="#">'.$data['entry_oleh'].'</a> '.$tanggal.'</p>';
		echo "<hr size=1 color=#ccc />";
		}
	}
	