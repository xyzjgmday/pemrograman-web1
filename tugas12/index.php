<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Mahasiswa</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 30px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
        text-align: center;
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #00CC00;
        color: #fff;
        font-weight: bold;
        padding: 10px;
        text-align: left;
    }

    td {
        padding: 10px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #fff;
    }

    body:before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 100px;
        z-index: -1;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        text-align: center;
        font-size: 16px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 4px;
        text-decoration: none;
    }

    /* Efek hover */
    .btn:hover {
        background-color: #45a049;
    }

    /* Efek ketika tombol ditekan */
    .btn:active {
        background-color: #3e8e41;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>List Data Mahasiswa</h3>
        <div class="text-end>
        <a href
</div>
            <div class=" table">
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                </tr>
                <?php
                $sql = "SELECT m.nama_lengkap, m.nim, k.nama_kelas, p.program_studi
                            FROM mahasiswa m
                            JOIN kelas_mahasiswa km ON m.id = km.mahasiswa_id
                            JOIN kelas k ON k.id_kelas = km.kelas_id
                            JOIN program_studi p ON p.ps_id = m.program_studi";
                $data = mysqli_query($konek, $sql);
                $no = 1;
                while ($row = mysqli_fetch_array($data)) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama_kelas'] ?></td>
                    <td><?= $row['program_studi'] ?></td>
                </tr>
                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</body>

</html>