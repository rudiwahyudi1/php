<?php 
require 'function.php';
    $id = $_GET["id"];
    $kry = query("SELECT * FROM karyawan WHERE id = $id ")[0];

    if( isset($_POST["submit"]) ) {
        // cek data berhasil diubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Karyawan</title>
    </head>
    <body>
        <h1>Ubah Data Karyawan</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $kry["id"] ?>">
             <ul>
                <li>
                    <label for="nik">Nik :</label>
                    <input type="text" name="nik" id="nik" required
                    value="<?= $kry["nik"]; ?>">
                </li>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required
                    value="<?= $kry["nama"]; ?>">
                </li>
                <li>
                    <label for="jabatan">Jabatan :</label>
                    <input type="text" name="jabatan" id="jabatan" required
                    value="<?= $kry["jabatan"]; ?>">
                </li>
                <li>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat"  required
                    value="<?= $kry["alamat"]; ?>">
                </li>
                <li>
                    <label for="foto">Foto :</label>
                    <input type="text" name="foto" id="foto" required
                    value="<?= $kry["foto"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Update</button>
                </li>
             </ul>
        </form>

    </body>
</html>