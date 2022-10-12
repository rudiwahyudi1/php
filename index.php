<?php
require 'function.php';
$karyawan = query("SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Daftar Karyawan</h1>

        <a href="tambah.php">Tambah Data Karyawan</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Foto</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($karyawan as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('Apakah Anda Yakin?')">hapus</a>
                </td>
                <td><img src="img/<?= $row["foto"]; ?>" width="50"></td>
                <td><?= $row["nik"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jabatan"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tr>
        </table>
    </body>
</html>