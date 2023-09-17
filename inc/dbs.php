<?php
/*
	(c) Copyright Zhiemy.com 2016
	Silahkan di edit-edit, CMS ini dibuat untuk teman-teman yang pengen belajar bikin website
	FREE OPENSOURCE!!!
*/

class Dbs
{
	private $servername;
	private $username;
	private $password;
	private $dbnam;

	protected function konek()
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "zzcms";

		// Create connection
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		return $conn;
	}
}
