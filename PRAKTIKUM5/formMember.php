<?php 
require 'koneksi.php';
require 'Model.php';
if (isset($_GET["id_member"])) {
    $id = $_GET["id_member"];
    $query = "SELECT * FROM member WHERE id_member = $id";
    $listMember = query($query)[0];
    if (isset($_POST["submit"])) {
        $data = [
            'nama_member' => $_POST['nama_member'],
            'nomor_member' => $_POST['nomor_member'],
            'alamat' => $_POST['alamat'],
            'tgl_mendaftar' => $_POST['tgl_mendaftar'],
            'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
        ];

        if (ubah('member', $data,'id_member',$id) > 0) {
            echo "<script>
                    alert('Data Berhasil diubah');
                    document.location.href = 'member.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal diubah');
                  </script>";
        }
    }
} else {
    if (isset($_POST["submit"])) {
        $data = [
            'nama_member' => $_POST['nama_member'],
            'nomor_member' => $_POST['nomor_member'],
            'alamat' => $_POST['alamat'],
            'tgl_mendaftar' => $_POST['tgl_mendaftar'],
            'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
        ];

        if (tambah('member', $data) > 0) {
            echo "<script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'member.php';
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
    <title><?= isset($id) ? 'Ubah Data Member' : 'Tambah Member Baru' ?></title>
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
        <h1 class="text-center mb-4" style="color: #4285f4;"><?= isset($id) ? 'Ubah Data Member' : 'Tambah Member Baru' ?></h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_member" class="form-label">Nama Member</label>
                <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?= isset($id) ? htmlspecialchars($listMember["nama_member"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="nomor_member" class="form-label">Nomor Member</label>
                <input type="text" class="form-control" id="nomor_member" name="nomor_member" value="<?= isset($id) ? htmlspecialchars($listMember["nomor_member"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= isset($id) ? htmlspecialchars($listMember["alamat"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="tgl_mendaftar" class="form-label">Tanggal Mendaftar</label>
                <input type="datetime-local" class="form-control" id="tgl_mendaftar" name="tgl_mendaftar" value="<?= isset($id) ? htmlspecialchars($listMember["tgl_mendaftar"]) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="tgl_terakhir_bayar" class="form-label">Tanggal Terakhir Bayar</label>
                <input type="date" class="form-control" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" value="<?= isset($id) ? htmlspecialchars($listMember["tgl_terakhir_bayar"]) : '' ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary"><?= isset($id) ? 'Ubah Data' : 'Tambahkan Data' ?></button>
        </form>
        <a href="member.php" class="btn btn-secondary mt-3">Kembali ke List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
