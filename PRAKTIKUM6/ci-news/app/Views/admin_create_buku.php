<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<?php $validation = \Config\Services::validation(); ?>
<?php if (session()->has('validation')): ?>
    <div class="alert alert-danger">
        <?= session('validation')->listErrors(); ?>
    </div>
<?php endif; ?>

<form action="/admin/buku/new" method="post" id="text-editor">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul Baru" required>
    </div>
    <div class="form-group">
        <label for="penulis">penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Penulis" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="Penerbit" class="form-control" placeholder="Penerbit" required >
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Submit</button>
    </div>
</form>


<?= $this->endSection() ?>
