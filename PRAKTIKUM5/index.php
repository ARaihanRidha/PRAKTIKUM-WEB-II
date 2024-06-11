<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Menu Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Bootstrap Icons -->
    <style>
        .list-group-item:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/library.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Halaman Menu Perpustakaan
            </a>
        </div>
    </nav>
    <div class="row d-flex justify-content-center align-items-center" style="margin-top: 100px;">
        <div class="col-4" style="margin-top: 10px;">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" href="peminjaman.php" role="tab" aria-controls="list-profile">
                    <i class="bi bi-house-door"></i> Menu
                </a>
                <a class="list-group-item list-group-item-action" href="peminjaman.php" role="tab" aria-controls="list-profile">
                    <i class="bi bi-journal-check"></i> Daftar Peminjaman
                </a>
                <a class="list-group-item list-group-item-action" href="member.php" role="tab" aria-controls="list-messages">
                    <i class="bi bi-people"></i> Daftar Member
                </a>
                <a class="list-group-item list-group-item-action" href="buku.php" role="tab" aria-controls="list-messages">
                    <i class="bi bi-book"></i> Daftar Buku
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
