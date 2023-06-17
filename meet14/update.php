<?php

$conn = mysqli_connect('localhost', 'root', '', 'daytedc');

$conn = mysqli_connect('localhost', 'root', '', 'daytedc');

$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$periode = $_REQUEST['periode'];
$kelas = $_REQUEST['kelas'];
$prodi = $_REQUEST['prodi'];

$udpate = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', periode='$periode', kelas='$kelas', prodi='$prodi' WHERE nim='$nim'");

// var_dump($_REQUEST)

?>