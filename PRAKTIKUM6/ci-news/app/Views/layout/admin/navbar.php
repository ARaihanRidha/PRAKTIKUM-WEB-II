<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/buku') ?>">Admin Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('admin/buku/new') ?>" class="btn btn-primary mr-3">New Post</a>
                </li>
                <li class="nav-item" style="justify-self:end">
                    <a href="<?= base_url('buku') ?>" class="btn btn-light mr-3">Login Sebagai User</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>