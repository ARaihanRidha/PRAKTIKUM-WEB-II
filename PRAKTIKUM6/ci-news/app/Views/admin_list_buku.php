<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<section class="jumbotron text-center">
    <h1>Welcome, <?= session()->name ?></h1>
    
</section>
<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Action</th>

</tr>
</thead>
<tbody>
<?= $i=1 ?>
<?php foreach($data_buku as $buku): ?>
<tr>
    <td><?= $i++ ?></td>
    <td>
        <strong><?= $buku['judul'] ?></strong><br>
    </td>
    <td>
    <strong><?= $buku['penulis'] ?></strong><br>
    </td>
    <td>
    <strong><?= $buku['penerbit'] ?></strong><br>
    </td>
    <td>
    <strong><?= $buku['tahun_terbit'] ?></strong><br>
    </td>
    <td>
        <a href="<?= base_url('admin/buku/'.$buku['id'].'/bukuDetail') ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Detail</a>
        <a href="<?= base_url('admin/buku/'.$buku['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/buku/'.$buku['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>
<p>Untuk logout dari sistem silakan klik <a href="<?php echo base_url('logout');?>">Logout</a></p>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>


<?= $this->endSection() ?>
