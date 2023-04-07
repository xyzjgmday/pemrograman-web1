<!DOCTYPE html>
<html>

<head>
    <title>Form Konversi Suhu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Konversi Suhu</h2>
        <form action="" method="POST">
            <label>Masukkan suhu:</label>
            <input type="number" name="suhu" required>
            <label>Pilih satuan suhu:</label>
            <select name="satuan">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>
            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $suhu = $_POST['suhu'];
            $satuan = $_POST['satuan'];
            if ($satuan == 'fahrenheit') {
                $hasil = ($suhu * 9 / 5) + 32;
                echo "<p>" . $suhu . " °C = " . $hasil . " °F</p>";
            } elseif ($satuan == 'kelvin') {
                $hasil = $suhu + 273.15;
                echo "<p>" . $suhu . " °C = " . $hasil . " K</p>";
            } else {
                echo "<p>" . $suhu . " °C = " . $suhu . " °C</p>";
            }
        }
        ?>
    </div>
</body>

</html>