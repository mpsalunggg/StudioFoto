<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?>
    </h1>
    <?= $this->session->flashdata('message');?>
    <div class="row">
        <div class="input-group mb-3 col-md offset-md-8">
            <?php echo form_open('user/cariDataJasa')?>
            <input type="text" name="keyword" class="form-control float-left" placeholder="Recipient's username"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
            <?php echo form_close()?>
        </div>
    </div>

    <?php foreach($pesananjasa as $pj): ?>
    <div class="card bg-light mb-3 col">
        <div class="card-header row">
            <div class="text-danger col-6"><?= $pj['jenis_jasa']; ?></div>
            <div class="text-right col-6">
                <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                    data-target="#delete<?php echo $pj['id']; ?>">Hapus Pesanan</a>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="card-body">
                    <h5><?= $pj['nama'] ?></h5>
                    <h6 class="card-title"><?= $pj['alamat'];?></h6>
                    <p><?=$pj['no_hp'];?></p>
                    <p><?=$pj['lokasi'];?></p>
                    <p class="text-right"><?=$pj['paket'];?></p>
                    <p class="text-right text-success">Tanggal Boking : <?= $pj['date'];?></p>
                </div>
            </div>
            <div class="col-2">
                <img src="<?= base_url('/assets/buktijasa/').$pj['bukti']; ?>" alt="" width="150">
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Edit -->


<!-- Modal Hapus -->
<?php foreach($pesananjasa as $pj): ?>
<div class="modal fade" id="delete<?php echo $pj['id']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel"
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
                <a type="button" class="btn btn-primary" href="<?= base_url('user/hapus_jasa/').$pj['id']; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- akhr modal hapus -->