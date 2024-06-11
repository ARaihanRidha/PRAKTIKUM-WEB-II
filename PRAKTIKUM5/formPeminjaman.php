<?php 
require 'koneksi.php';
require 'Model.php';

$isEdit = isset($_GET['id_peminjaman']);
$data = [];
$title = $isEdit ? 'Ubah Data Peminjaman' : 'Tambah Peminjaman Baru';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];

    if ($isEdit) {
        $id_peminjaman = $_GET['id_peminjaman'];
        if (ubah('peminjaman', $data, 'id_peminjaman', $id_peminjaman) > 0) {
            echo "<script>
                    alert('Data Berhasil diubah');
                    document.location.href = 'peminjaman.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal diubah');
                  </script>";
        }
    } else {
        if (tambah('peminjaman', $data) > 0) {
            echo "<script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'peminjaman.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Ditambahkan');
                  </script>";
        }
    }
}

if ($isEdit) {
    $id = $_GET['id_peminjaman'];
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $listMember = query($query)[0];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
        }
        .btn-primary {
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #4285f4;
            border-color: #4285f4;
            cursor: pointer;
        }
        .btn-secondary {
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #ccc;
            border-color: #ccc;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4" style="color: #4285f4;"><?= $title ?></h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $isEdit ? htmlspecialchars($listMember['tgl_pinjam']) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $isEdit ? htmlspecialchars($listMember['tgl_kembali']) : '' ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary"><?= $isEdit ? 'Ubah Data' : 'Tambahkan Data' ?></button>
        </form>
        <a href="peminjaman.php" class="btn btn-secondary mt-3">Kembali ke List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
