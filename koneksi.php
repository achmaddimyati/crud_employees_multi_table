<?php 
$servername="localhost";
$username="root";
$password="";
$db_name="employess";

$koneksi=mysqli_connect($servername,$username,$password,$db_name);
if (!$koneksi)
    {
        die("gagal tersambung ke database". mysqli_connect_error());
    } 
?>