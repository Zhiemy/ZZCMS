<?php
/*
	(c) Copyright Zhiemy.com 2016
	Silahkan di edit-edit, CMS ini dibuat untuk teman-teman yang pengen belajar bikin website
	FREE OPENSOURCE!!!
*/

class Fetchdata extends Dbs
{
   public function getpost()
   {
      $sql = "SELECT * FROM posts";
      $result = $this->konek()->query($sql);
      $numrows = $result->num_rows;

      if ($numrows > 0) {
         while ($row = $result->fetch_assoc()) {
            $data[] = $row;
         }

         return $data;
      }
   }

   public function getpostdetail($id)
   {
      $sql = "SELECT * FROM posts where id = " . $id . "";
      $result = $this->konek()->query($sql);
      $numrows = $result->num_rows;

      if ($numrows > 0) {
         while ($row = $result->fetch_assoc()) {
            $data[] = $row;
         }

         return $data;
      }
   }

   public function getpages($id)
   {
      $sql = "SELECT * FROM pages where id = " . $id . "";
      $result = $this->konek()->query($sql);
      $numrows = $result->num_rows;

      if ($numrows > 0) {
         while ($row = $result->fetch_assoc()) {
            $data[] = $row;
         }

         return $data;
      }
   }

   public function getfoto()
   {
      $sql = "SELECT * from gallery order by id_gallery desc";
      $result = $this->konek()->query($sql);
      $numrows = $result->num_rows;

      if ($numrows > 0) {
         while ($row = $result->fetch_assoc()) {
            $data[] = $row;
         }
      } else {
         $data = array();
      }

      return $data;
   }

   public function getfotodetail($id)
   {
      $sql = "SELECT * from gallery_file WHERE id_gallery = " . $id . " order by id_gallery desc";
      $result = $this->konek()->query($sql);
      $numrows = $result->num_rows;

      if ($numrows > 0) {
         while ($row = $result->fetch_assoc()) {
            $data[] = $row;
         }

         return $data;
      }
   }

   public function login()
   {
      $username = $_REQUEST['username'];
      $password = md5($_REQUEST['password']);

      $sql = "SELECT * from user where username = '$username' and password = '$password'";
      $result = $this->konek()->query($sql);
      $numrows = $result->num_rows;
      $data = $result->fetch_assoc();

      if ($numrows > 0) {
         session_start();
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         $_SESSION['level'] = $data['level'];
         $_SESSION['nama'] = $data['nama_user'];

         return TRUE;
      } else {
         return FALSE;
      }
   }
}
