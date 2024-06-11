<?php 
require 'koneksi.php';
require 'Model.php';

// Query untuk mengambil semua data yang dibutuhkan
$query = "SELECT * FROM buku";

$result = query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }
        .table-container {
            width: 80%; /* Adjust the width as needed */
        }
    </style>
</head>
<body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/library.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Halaman Daftar Buku
            </a>
        </div>
    </nav>
    <div class="centered-content">
        <div class="table-container">
            
            <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($result as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= htmlspecialchars($row['judul_buku']); ?></td>
                        <td><?= htmlspecialchars($row['penulis']); ?></td>
                        <td><?= htmlspecialchars($row['penerbit']); ?></td>
                        <td><?= htmlspecialchars($row['tahun_terbit']); ?></td>
                        <td>
                            <a href="formBuku.php?id_buku=<?= $row['id_buku']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                            <a href="hapus.php?id_buku=<?= $row['id_buku']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="d-flex flex-row">
                <a href="formBuku.php" class="btn btn-primary d-flex justify-content-start" style="width: fit-content;">Tambah List Buku</a>
                <a href="index.php" class="btn btn-secondary d-flex justify-content-end" style="justify-self:end; margin-left:10px">Kembali Ke menu utama</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
