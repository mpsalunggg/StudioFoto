<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message');?>
    <div class="row">
        <div class="input-group mb-3 col-md offset-md-8">
            <form action="<?= base_url('user'); ?>">
                <input type="text" name="keyword" class="form-control float-left" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
                <div class="input-group-append">
                    <input class="btn btn-outline-secondary" type="submit" name="submit2" id="button-addon2"></input>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Harga</th>
                <th scope="col">Size</th>
                <th scope="col">Foto</th>
                <th scope="col">Bukti Transfer</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($pesanan as $p): ?>
            <tr>
                <th scope=" row"><?= $i; ?></th>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['no_hp']; ?></td>
                <td><?= $p['alamat']; ?></td>
                <td><?= $p['harga']; ?></td>
                <td><?= $p['size']; ?></td>
                <td>
                    <img src="<?= base_url().'/assets/foto/'.$p['foto']; ?>" alt="" width="200">
                </td>
                <td>
                    <img src="<?= base_url().'/assets/foto/'.$p['bukti_tf']; ?>" alt="" width="100">
                </td>
                <td>
                    <!-- <a href="" class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#edit<?php echo $p['id']; ?>">Edit</a> -->
                    <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#hapusModal<?php echo $p['id']; ?>">Hapus Pesanan</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Button Hapus -->
<?php foreach($pesanan as $p): ?>
<div class="modal fade" id="hapusModal<?php echo $p['id']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Yakin Ingin Hapus?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <a type="button" class="btn btn-primary" href="<?= base_url('user/hapus_data/').$p['id']; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- End Button Hapus -->