<?php 
require 'function.php';

if ( isset($_POST["submit"])) {
        // cek data berhasil dikirim atau tidak
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Karyawan</title>
    </head>
    <body>
        <h1>Tambah Data Karyawan</h1>

        <form action="" method="post">
             <ul>
                <li>
                    <label for="nik">Nik :</label>
                    <input type="text" name="nik" id="nik" required>
                </li>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="jabatan">Jabatan :</label>
                    <input type="text" name="jabatan" id="jabatan" required>
                </li>
                <li>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat" required>
                </li>
                <li>
                    <label for="foto">Foto :</label>
                    <input type="text" name="foto" id="foto">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
             </ul>
        </form>

    </body>
</html>