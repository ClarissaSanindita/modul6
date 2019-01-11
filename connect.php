<?php

$host = "localhost";
$db = "db_moklet";
$user = "root";
$pass = "";

$connect = new mysqli($host, $user, $pass, $db);

if (!$connect) {
  exit('KONEKSI GAGAL');
}

 ?>
