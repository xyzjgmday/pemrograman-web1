<!DOCTYPE html>
<html>

<head>
    <title>Perhitungan Suhu</title>
</head>

<body>
    <h2>Perhitungan Suhu</h2>
    <form action="" method="POST">
        <label>Masukkan suhu dalam Celsius:</label>
        <input type="number" name="celsius" required><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $suhu = $_POST['suhu'];
        $satuan = $_POST['satuan'];
        if ($satuan == 'fahrenheit') {
            $hasil = ($suhu * 9 / 5) + 32;
            echo "<p class='hasil'>" . $suhu . " °C = " . $hasil . " °F</p>";
        } elseif ($satuan == 'kelvin') {
            $hasil = $suhu + 273.15;
            echo "<p class='hasil'>" . $suhu . " °C = " . $hasil . " K</p>";
        } else {
            echo "<p class='hasil'>" . $suhu . " °C = " . $suhu . " °C</p>";
        }
    }
    ?>
</body>

</html>