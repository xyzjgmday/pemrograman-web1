<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'tedc');

$result = mysqli_query($conn, "SELECT
                                    mahasiswa.id,
                                    mahasiswa.nama_lengkap,
                                    mahasiswa.nim,
                                    mahasiswa.periode,
                                    program_studi.program_studi,
                                    kelas.nama_kelas 
                                FROM
                                    mahasiswa
                                    LEFT JOIN program_studi ON mahasiswa.program_studi = program_studi.ps_id
                                    LEFT JOIN kelas_mahasiswa ON mahasiswa.id = kelas_mahasiswa.mahasiswa_id
                                    LEFT JOIN kelas ON kelas_mahasiswa.kelas_id = kelas.id_kelas
                                WHERE
                                    kelas.nama_kelas LIKE '%IF 2021 K%'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .text-end {
            text-align: end;
        }

        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        table {
            width: 100%;
            margin-top: 12px;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }

        td {
            vertical-align: middle;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1 class="mt-3" style="text-align: center;">Daftar Mahasiswa</h1>
        <div class="text-end">
            <a href="insert.php" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table table-bordered table-striped" style="margin-top: 12px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Periode</th>
                    <th>Program Studi</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($fetch_assoc = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $fetch_assoc['nama_lengkap']; ?></td>
                        <td><?= $fetch_assoc['nim']; ?></td>
                        <td><?= $fetch_assoc['periode']; ?></td>
                        <td><?= $fetch_assoc['program_studi']; ?></td>
                        <td><?= $fetch_assoc['nama_kelas']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>