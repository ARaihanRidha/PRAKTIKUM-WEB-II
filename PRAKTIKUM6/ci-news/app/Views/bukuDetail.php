<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<h2>Halaman Detail Buku</h2>
<h2 class="h2"><?= $data_buku['judul'] ?></h2>
<div class="mb-5">
    
</div>
<div><?= $data_buku['penulis'] ?></div>
<div><?= $data_buku['penerbit'] ?></div>
<div><?= $data_buku['tahun_terbit'] ?></div>
<?= $this->endSection() ?>