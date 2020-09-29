<?php 
include 'koneksi.php';

if(isset($_POST['sempan'])){
    $id=$_POST['id_pegawai'];
    $nama=$_POST['nama'];
    $jk=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $no=$_POST['no_telepon'];
    $agama=$_POST['agama'];
    
    $sql="UPDATE pegawai SET nama='$nama',jenis_kelamin='$jk',alamat='$alamat',no_telepon='$no',agama='$agama' WHERE id_pegawai='$id'";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('Location:view.php');
    }else{
        die("Gagal menambah data pegawai");
    }
}else {
    die("akses ditolak!");
}

?>