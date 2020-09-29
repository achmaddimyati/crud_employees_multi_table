<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
</head>
<body>
<center><header>
        <h3>Tabel Daftar Biodata Pegawai Aktif 2020</h3>
    </header>
    <table border="2">
        <thead>
            <th>Id</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No. Telepon</th>   
            <th>Agama</th>   
            <th>Aksi</th>
        </thead>
        <tbody>
           <?php 
           $sql="SELECT * FROM pegawai";
           $query=mysqli_query($koneksi,$sql);
           $no=1;
           while($baris=mysqli_fetch_array($query))
               {$ag=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM agama WHERE id_agama=$baris[agama]"));
                echo "<tr>
                        <td>$no</td>
                        <td>$baris[nama]</td>
                        <td>$baris[jenis_kelamin]</td>
                        <td>$baris[alamat]</td>
                        <td>$baris[no_telepon]</td>
                        <td>$ag[agama]</td>
                        <td>
                            <a href='edit.php?id=$baris[id_pegawai]'>Edit |</a>
                            <a href='hapus.php?id=$baris[id_pegawai]'> Hapus</a>
                        </td>
                </tr>";
                $no++;
               }
           ?>       
        </tbody>
    </table>
    <p><a href="add.php">[+] add employee...</a></p>
</center>    
</body>
</html>