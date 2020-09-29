<?php 
include 'koneksi.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM pegawai WHERE id_pegawai=$id";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('Location:view.php');
    }else {
        die("gagal hapus data");
    }
}die("akses terlarang");
?>