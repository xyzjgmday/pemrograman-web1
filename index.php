<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $jenis_kelamin = 'Laki-laki';
    $nama_lengkap = 'Nur Hidayat';
    $umur = 25;
    $berat = 62;
    $tinggi = 170;
    $menikah = false;
    $nilai = 92;

    if ($nilai >= 85 && $nilai <= 100) {
        $huruf = "A";
        $keterangan = "Istimewa";
    } else if ($nilai >= 80 && $nilai <= 84) {
        $huruf = "AB";
        $keterangan = "Lebih dari Cukup";
    } else if ($nilai >= 75 && $nilai <= 79) {
        $huruf = "B";
        $keterangan = "Baik";
    } else if ($nilai >= 70 && $nilai <= 74) {
        $huruf = "BC";
        $keterangan = "Lebih dari Cukup";
    } else if ($nilai >= 60 && $nilai <= 69) {
        $huruf = "C";
        $keterangan = "Cukup";
    } else if ($nilai >= 50 && $nilai <= 59) {
        $huruf = "CD";
        $keterangan = "Kurang dari Cukup";
    } else if ($nilai >= 40 && $nilai <= 49) {
        $huruf = "D";
        $keterangan = "Kurang";
    } else if ($nilai <= 39) {
        $huruf = "E";
        $keterangan = "Gagal";
    } else {
        $huruf = "Nilai tidak terdefinisi. ";
        $keterangan = '';
    }
    ?>
    <h1>Data Diri Mahasiswa</h1>
    <table border="2" style="border-collapse: collapse; margin-left: 2%;">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?php echo $nama_lengkap; ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $jenis_kelamin; ?>
            </td>
        </tr>
        <tr>
            <td>
                Umur
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $umur; ?>
            </td>
        </tr>
        <tr>
            <td>
                Status Pernikahan
            </td>
            <td>
                :
            </td>
            <td>
                <?= ($menikah) ? "Kawin" : "Belum Kawin"; ?>
            </td>
        </tr>
        <tr>
            <td>
                Nilai
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $nilai; ?>
            </td>
        </tr>
        <tr>
            <td>
                Huruf
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $huruf; ?>
            </td>
        </tr>
        <tr>
            <td>
                Keterangan
            </td>
            <td>
                :
            </td>
            <td>
                <?= $keterangan;?>
            </td>
        </tr>
    </table>
</body>

</html>