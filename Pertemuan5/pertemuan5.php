<!DOCTYPE html>
<html>

<head>
    <title>Absen Mahasiswa IF-2021K</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Absen Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
        <?php
        //absen mahasiswa
        $absen_mahasiswa = array(
            array("nomor" => 1, "nama" => "Andre", "nim" => "D112121051"),
            array("nomor" => 2, "nama" => "Encep Rahman Armana", "nim" => "D112121053"),
            array("nomor" => 3, "nama" => "Ikhsan Fauzan", "nim" => "D112121054"),
            array("nomor" => 4, "nama" => "Sarah Fadilah Sulaeman", "nim" => "D112121055"),
            array("nomor" => 5, "nama" => "Wahyu Safrizal", "nim" => "D112121056"),
            array("nomor" => 6, "nama" => "Nur Hidayat", "nim" => "D112121057"),
            array("nomor" => 7, "nama" => "Panji Wiranto", "nim" => "D112121058"),
            array("nomor" => 8, "nama" => "Riyan", "nim" => "D112121061"),
            array("nomor" => 9, "nama" => "Alma Sulaiman", "nim" => "D112111015")
        );
        function cmp($a, $b)
        {
            return strcmp($b["nim"], $a["nim"]);
        }

        usort($absen_mahasiswa, "cmp");


        foreach ($absen_mahasiswa as $am) {
            echo "<tr>";
            echo "<td>" . $am["nomor"] . "</td>";
            echo "<td>" . $am["nama"] . "</td>";
            echo "<td>" . $am["nim"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>