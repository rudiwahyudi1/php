<?php 
//konek ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar1");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "INSERT INTO karyawan VALUES
            ('', '$nama', '$nik', '$jabatan', '$alamat', '$foto')
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan  WHERE id= $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $id = $data["id"];
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "UPDATE karyawan SET
        nik = '$nik',
        nama = '$nama',
        jabatan = '$jabatan',
        alamat = '$alamat',
        foto = '$foto'
        WHERE id = $id
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
?>