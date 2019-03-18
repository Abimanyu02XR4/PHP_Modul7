<?php
    include '../connect.php';
    $kode = $_GET['kode'];
    $query = "SELECT kode, nama_matkul, sks, semester, matakuliah,id_dosen,nama_dosen FROM matakuliah LEFT JOIN dosen USING (id_dosen) WHERE  kode= '$kode'";

    $result = mysqli_query($connect, $query);
    $data_dosen = mysqli_fetch_assoc($result);
?>

<html>
    <head>
        <title>Update Form</title>
    </head>
    <body>
        <h1>Update Data Matakuliah</h1>
        <form action="update.php" method="POST">
            <table>
                <tr>
                    <td><label for="kode">KODE</label></td><td> :   </td>
                    <td><input type="text" name="kode" id="kode" readonly value="<?php echo $data_dosen['kode'];?>"></td>
                </tr>
                <tr>
                    <td><label for="nama_matkul">Matakuliah</label></td><td> :   </td>
                    <td><input type="text" name="nama_matkul" id="nama_matkul" value="<?php echo $data_dosen['nama_matkul'];?>"></td>
                </tr>
                <tr>
                    <td><label for="sks">SKS</label></td><td> :   </td>
                    <td><input type="number" name="sks" id="sks" value="<?php echo $data_dosen['sks'];?>"></td>
                </tr>
                <tr>
                    <td><label for="semester">Semester</label></td><td> :   </td>
                    <td><input type="number" name="semester" id="semester" value="<?php echo $data_dosen['semester'];?>"></td>
                </tr>
                <tr>
                    <td><label for="nama_dosen">Dosen Pengajar</label></td><td> :   </td>
                </tr>   
                <tr>
                    <td></td><td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
