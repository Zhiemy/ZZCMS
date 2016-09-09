<?php
include "config.php";

	function page_title()
	{	
		echo 'Tentang awkwa CMS';
	}
	
	function data($id){
	
		$kueri = mysql_query("select * from pages where id_pages = ".$id."");
		$data = mysql_fetch_array($kueri);
		
		echo "<h2>$data[judul]</h2>";
		echo "$data[content]";
	}
	