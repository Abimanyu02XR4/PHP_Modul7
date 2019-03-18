<?php
    include '../connect.php';

    $query = "SELECT id_dosen, nama_dosen FROM dosen";
    $result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mata Kuliah</title>
</head>
<body>
    <form action="create.php" method="POST">
    <table>
    <tr>
        <td><label>Kode</label></td>
        <td>:</td>
        <td><input type="text" name="kode"></td>
    </tr>
    <tr>
        <td><label>Mata Kuliah</label></td>
        <td>:</td>
        <td><input type="text" name="nama_matkul"></td>
    </tr>
    <tr>
        <td><label>SKS</label></td>
        <td>:</td>
        <td><input type="text" name="sks"></td>
    </tr>
    <tr>
        <td><label>Semester</label></td>
        <td>:</td>
        <td><input type="text" name="semester"></td>
    </tr>
    <tr>
        <td><label> Dosen Pengajar</label></td>
        <td>:</td>
        <td><select name="id_dosen" id="nama_dosen">
        <option value="NULL">--Pilih salah satu--</option>
        <option value="nama_dosen">Abimanyu Prakoso</option>
        <?php
            while ($data = mysqli_fetch_assoc($result)){
                ?>
            <option value="<?php echo $data['id_dosen'];?>">
                <?php echo $data ['nama_dosen'];?>
            </option>
            <?php
            }
        ?>
        </select>
        </td>
    </tr>
    <td><input type="submit"name="submit"></td>
    </table>
    </form>
</body>
</html>