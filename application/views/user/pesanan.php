<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Cetak Foto</h1>
    <?= $this->session->flashdata('message');?>
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
                <th scope="row"><?= $i; ?></th>
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
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#edit<?php echo $p['id']; ?>">Edit</a>
                    <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#hapusModal<?php echo $p['id']; ?>">Batal</a>
                </td>
            </tr>
            <tr>
                <td colspan="9" class="text-success text-right">
                    <?= date('d F Y', $p['date']);?>
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

<!-- Button Edit -->
<?php $no = 0;
foreach($pesanan as $p): $no++; ?>
<div class="modal fade" id="edit<?php echo $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Data Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/edit_data_pesanan'); ?>
            <div class=" modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" placeholder="Nama" name="id"
                        value="<?= $p['id'] ;?>" required="">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"
                        value="<?= $p['nama'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp"
                        value="<?= $p['no_hp'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"
                        value="<?= $p['alamat'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="harga" name="harga" value="15000"
                        value="<?= $p['harga'] ;?>" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="size" name="size" value=" <?= $p['size'] ;?>"
                        required="">
                </div>
                <p>Masukan Gambar Baru Yang ingin dicetak!(JPG,PNG,JPEG)</p>
                <div class=" form-group">
                    <input type="file" class="form-control" id="userfile" placeholder="Masukkan Foto" name="userfile"
                        size="150">
                </div>
                <img src="<?= base_url().'/assets/foto/'. $p['foto']?>" alt="" width="150">
                <hr>
                <p class="text-danger">Bukti Tidak Dapat Diubah!</p>

                <p class="text-center">Rp. 15000</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>