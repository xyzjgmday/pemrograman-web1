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
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9 / 5) + 32;
        $kelvin = $celsius + 273.15;
        echo "<br>";
        echo "Hasil Konversi:<br>";
        echo "Celsius ke Fahrenheit: " . $fahrenheit . " °F<br>";
        echo "Celsius ke Kelvin: " . $kelvin . " K";
    }
    ?>
</body>

</html>