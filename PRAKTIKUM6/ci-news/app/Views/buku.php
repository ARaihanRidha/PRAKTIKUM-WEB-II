<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <?php foreach ($data_buku as $buku) : ?>
        <div class="row">
            <div class="col-md-12 mb-2 card">
                <div class="card-body">
                    <h5 class="h5"><?= $buku['judul'] ?></a></h5>
                    <p><?= substr($buku['penulis'], 0, 120) ?></p>
                    <p><?= substr($buku['penerbit'], 0, 120) ?></p>
                    <p><?= substr($buku['tahun_terbit'], 0, 120) ?></p>
                </div>
            </div>
            
        </div>

    <?php endforeach ?>
</div>


<?= $this->endSection() ?>