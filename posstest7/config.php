<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "php-crud";
$db = mysqli_connect($hostname,$username,$database);
if(!$db){
  echo "Koneksi tidak terhubung";
}
?>