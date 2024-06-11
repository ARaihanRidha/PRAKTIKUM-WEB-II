<?php 
require 'koneksi.php';
require 'Model.php';
$isEdit = isset($_GET["id_buku"]);
$id = $isEdit ? $_GET["id_buku"] : null;
$listBuku = $isEdit ? query("SELECT * FROM buku WHERE id_buku = $id")[0] : null;

if (isset($_POST["submit"])) {
    $data = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
    ];

    if ($isEdit) {
        // Mode Ubah
        $data['id_buku'] = $_POST['id_buku'];
        $id_buku = $data['id_buku'];
        if (ubah('buku', $data, 'id_buku', $id_buku) > 0) {
            echo "<script>
                    alert('Data Berhasil diubah');
                    document.location.href = 'buku.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal diubah');
                  </script>";
        }
    } else {
        // Mode Tambah
        if (tambah('buku', $data) > 0) {
            echo "<script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'buku.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Ditambahkan');
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $isEdit ? "Halaman Ubah Data Buku" : "Halaman Form Buku" ?></title>
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
        <h1 class="text-center mb-4" style="color: #4285f4;"><?= $isEdit ? "Ubah Data Buku" : "Tambah Buku Baru" ?></h1>
        <form action="" method="post">
            <?php if ($isEdit): ?>
                <input type="hidden" name="id_buku" value="<?= htmlspecialchars($listBuku["id_buku"]) ?>">
            <?php endif; ?>
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $isEdit ? htmlspecialchars($listBuku["judul_buku"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $isEdit ? htmlspecialchars($listBuku["penulis"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $isEdit ? htmlspecialchars($listBuku["penerbit"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $isEdit ? htmlspecialchars($listBuku["tahun_terbit"]) : '' ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary"><?= $isEdit ? "Ubah Data" : "Tambah Buku" ?></button>
        </form>
        <a href="buku.php" class="btn btn-secondary mt-3">Kembali ke List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
