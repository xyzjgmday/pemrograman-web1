<?php

// var_dump($_REQUEST);

$conn = mysqli_connect('localhost', 'root', '', 'daytedc');

$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$periode = $_REQUEST['periode'];
$kelas = $_REQUEST['kelas'];
$prodi = $_REQUEST['prodi'];

$insert = mysqli_query($conn, "INSERT
                                    INTO mahasiswa (nim, nama, periode, kelas, prodi)
                                    VALUES ('$nim', '$nama', '$periode', '$kelas', '$prodi')");

if ($insert) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
