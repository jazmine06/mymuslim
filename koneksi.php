<?php 
//membuat file koneksi.php 
$host="localhost"; 
$user="root";
$password=""; 
$db="mymuslim.com"; 
$koneksi_db=mysqli_connect($host,$user,$password,$db); 
$db_koneksi=mysqli_select_db($koneksi_db,$db)
?>