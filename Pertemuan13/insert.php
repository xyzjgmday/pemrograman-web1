<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
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

        .form-control {
            border-radius: 0;
        }

        .col-form-label {
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            border-radius: 0;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .float-end {
            float: right;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-3">Tambah Mahasiswa</h1>
        <form action="save.php" method="POST">
            <div class="mb-3 row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="periode" class="col-sm-2 col-form-label">Periode</label>
                <div class="col-sm-10">
                    <select class="form-control" name="periode" id="periode">
                        <?php
                        $year = date('Y');
                        for ($i = $year; $i > $year - 5; $i--) { ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php }  ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary float-end">Simpan</button>
            <a href="index.php" class="btn btn-warning float-end me-2">Kembali</a>
    </div>
    </form>

</body>

</html>