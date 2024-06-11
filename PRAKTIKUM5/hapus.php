<?php 
require 'Model.php';

if (isset($_GET["id_buku"])) {
    $id = $_GET["id_buku"];
    if (hapus('buku','id_buku', $id) > 0) {
        echo "<script> alert('Data Berhasil Dihapus');
            document.location.href = 'buku.php';
            </script>";
    } else {
        echo "<script> alert('Data Gagal Dihapus');
            </script>";
    }
} elseif (isset($_GET["id_member"])) {
    $idmember = $_GET["id_member"];
    if (hapus('member','id_member', $idmember) > 0) {
        echo "<script> alert('Data Berhasil Dihapus');
            document.location.href = 'member.php';
            </script>";
    } else {
        echo "<script> alert('Data Gagal Dihapus');
            </script>";
    }
} elseif (isset($_GET["id_peminjaman"])) {
    $idpeminjaman = $_GET["id_peminjaman"];
    if (hapus('peminjaman','id_peminjaman', $idpeminjaman) > 0) {
        echo "<script> alert('Data Berhasil Dihapus');
            document.location.href = 'peminjaman.php';
            </script>";
    } else {
        echo "<script> alert('Data Gagal Dihapus');
            </script>";
    }
}
?>
