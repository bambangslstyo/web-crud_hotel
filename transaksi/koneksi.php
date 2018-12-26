<?php
$host ="localhost";
$user ="root"; 
$pass ="root";
$name ="hotel_db";
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi Database Gagal");
mysql_select_db($name,$koneksi)or die("Tidak Ada Database yang terpilih");

?>