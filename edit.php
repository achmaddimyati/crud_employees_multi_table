<?php 
include 'koneksi.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM pegawai WHERE id_pegawai=$id";
    $query=mysqli_query($koneksi,$sql);
    $pegawai=mysqli_fetch_assoc($query);
}else {
    die("akses terlarang...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form action="edit_.php" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="id_pegawai" value="<?php echo $pegawai['id_pegawai'];?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Pegawai</label></td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $pegawai['nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                <td>:</td>
                <?php $jk=$pegawai['jenis_kelamin']; ?>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk=='laki-laki')?"checked":""; ?>>Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk=='perempuan')?"checked":""; ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat Lengkap</label></td>
                <td>:</td>
                <td><textarea name="alamat" id="#" cols="30" rows="10"><?php echo $pegawai['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="no_telepon">No Telp.</label></td>
                <td>:</td>
                <td><input type="number" name="no_telepon" id="#" value="<?php echo $pegawai['no_telepon'];?>"></td>
            </tr>
            <tr>
                <td><label for="agama">Agama</label></td>
                <td>:</td>
                <td>
                    <select name="agama" id="#">
                    <?php 
                    $query=mysqli_query($koneksi,"SELECT * FROM agama");
                    while($ag=mysqli_fetch_array($query)){
                        if ($pegawai[agama]==$ag[id_agama])
                            {
                                echo "<option value='$ag[id_agama]' selected>$ag[agama]</option>"; 
                            } else {
                                echo "<option value='$ag[id_agama]'>$ag[agama]</option>";
                            }
                            
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td height="100" colspan="3" align="right"><input type="submit" name="sempan" value="Sempan"></td>
            </tr>

        </table>
    </form>
</body>
</html>