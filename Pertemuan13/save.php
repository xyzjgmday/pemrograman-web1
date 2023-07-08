<?php




$conn = mysqli_connect('localhost', 'root', '', 'tedc');

$id = 3004;
$nama_lengkap = $_REQUEST['nama_lengkap'];
var_dump($_REQUEST['nama_lengkap']);
die();
$nim = $_REQUEST['nim'];
$periode = $_REQUEST['periode'];

$insert = mysqli_query($conn, "INSERT 
                                INTO mahasiswa (id, nama_lengkap, nim, program_studi, periode)
                                VALUES ($id, '$nama_lengkap', '$nim', 3, '$periode')");

if ($insert) {
    mysqli_query($conn, "INSERT
                            INTO kelas_mahasiswa(id, kelas_id, mahasiswa_id)
                            VALUES ($id, 27, $id)");
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}