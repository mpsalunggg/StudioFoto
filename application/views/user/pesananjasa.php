<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?>
    </h1>
    <?= $this->session->flashdata('message');?>

    <?php foreach($pesananjasa as $pj): ?>
    <div class="card bg-light mb-3 col">
        <div class="card-header row">
            <div class="text-danger col-6"><?= $pj['jenis_jasa']; ?></div>
            <div class="text-right col-6">
                <a href="" class="btn btn-success btn-sm" data-toggle="modal"
                    data-target="#edit<?php echo $pj['id']; ?>">Edit</a>
                <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                    data-target="#delete<?php echo $pj['id']; ?>">Delete</a>
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
<!-- Button Edit -->
<?php $no = 0;

foreach($pesananjasa as $pj): $no++; ?>

<div class="modal fade" id="edit<?php echo $pj['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/edit_jasa'); ?>
            <div class=" modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $pj['id'] ;?>" required="">
                    <input type="text" class="form-control" id="jenis_jasa" placeholder="Nama" name="jenis_jasa"
                        value="<?= $pj['jenis_jasa'];?>" disabled>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" placeholder="No Handphone" name="nama"
                        value="<?= $pj['nama'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"
                        value="<?= $pj['alamat'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="date" placeholder="Alamat" name="date"
                        value="<?= $pj['date'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $pj['no_hp'] ;?>"
                        required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value=" <?= $pj['lokasi'] ;?>"
                        required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="paket" name="paket" value=" <?= $pj['paket'] ;?>"
                        required="" disabled>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="bukti" name="bukti" value=" <?= $pj['bukti'] ;?>"
                        required="" disabled>
                </div>
                <p class="text-danger">Bukti Tidak Dapat Diubah!</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Akhir Modal Edit -->

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