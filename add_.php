<?php 
include 'koneksi.php';

if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $jk=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $no=$_POST['no_telepon'];
    $agama=$_POST['agama'];
    
    $sql="INSERT INTO pegawai VALUES('','$nama','$jk','$alamat','$no','$agama')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('Location: view.php');
    }else{
        die("Gagal menambah data pegawai");
    }
}else {
    die("akses ditolak!");
}

?>