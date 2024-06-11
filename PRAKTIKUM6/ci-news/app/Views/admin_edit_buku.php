<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<?php $validation = \Config\Services::validation(); ?>
<?php if (session()->has('validation')): ?>
    <div class="alert alert-danger">
        <?= session('validation')->listErrors(); ?>
    </div>
<?php endif; ?>

<form action="" method="post" id="text-editor">
<?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= $buku['id'] ?>" />
    <div class="form-group">
        <label for="judul">judul</label>
        <input type="text" name="judul" class="form-control" 
            placeholder="Judul baru" value="<?= $buku['judul'] ?>" required>
    </div>
    <div class="form-group">
        <label for="penulis">penulis</label>
        <input type="text" name="penulis" class="form-control" 
            placeholder="penulis baru" value="<?= $buku['penulis'] ?>" required>
    </div>
    <div class="form-group">
        <label for="Penerbit">Penerbit</label>
        <input type="text" name="Penerbit" class="form-control" 
            placeholder="Penerbit baru" value="<?= $buku['penerbit'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control" 
            placeholder="tahun terbit baru" value="<?= $buku['tahun_terbit'] ?>" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Submit</button>
    </div>
</form>


<?= $this->endSection() ?>