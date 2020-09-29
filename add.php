<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form action="add_.php" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama Pegawai</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="#"></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" id="" value="laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin" id="" value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat Lengkap</label></td>
                <td>:</td>
                <td><textarea name="alamat" id="#" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><label for="no_telepon">No Telp.</label></td>
                <td>:</td>
                <td><input type="number" name="no_telepon" id="#"></td>
            </tr>
            <tr>
                <td><label for="agama">Agama</label></td>
                <td>:</td>
                <td>
                    <select name="agama" id="#">
                    <?php 
                    $query=mysqli_query($koneksi,"SELECT * FROM agama");
                    while($ag=mysqli_fetch_array($query))
                        {
                            echo "<option value='$ag[id_agama]'>$ag[agama]</option>";
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td height="100" colspan="3" align="right"><input type="submit" name="tambah" value="Tambah"></td>
            </tr>

        </table>
    </form>
</body>
</html>