<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="jumbotron text-center" style="height: 500px">
    <h1 class="mt-5">WEBSITE BUKU</h1>
    <p class="lead text-muted">
        Login sebagai admin website buku.
    </p>
    <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-primary my-2">Login</a>
    <a href="<?php echo base_url('register'); ?>" class="btn btn-success my-2">Register</a>
</section>

<?= $this->endSection() ?>