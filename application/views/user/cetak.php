<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message');?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 14rem; background-color: rgb(41, 43, 44); border-radius:25px;">
                    <img src="<?= base_url('assets/portofolio/size3r.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center text-white">Harga</h5>
                        <p class="text-center text-white">Rp. 5000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 14rem; background-color: rgb(41, 43, 44); border-radius:25px;">
                    <img src="<?= base_url('assets/portofolio/size4r.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center text-white">Harga</h5>
                        <p class="text-center text-white">Rp. 8000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#exampleModal2">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 14rem; background-color: rgb(41, 43, 44); border-radius:25px;">
                    <img src="<?= base_url('assets/portofolio/size5r.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center text-white">Harga</h5>
                        <p class="text-center text-white">Rp. 12000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#exampleModal3">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 14rem; background-color: rgb(41, 43, 44); border-radius:25px;">
                    <img src="<?= base_url('assets/portofolio/size10r.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center text-white">Harga</h5>
                        <p class="text-center text-white">Rp. 18000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#exampleModal4">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- 2R -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Data Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/tambah_data'); ?>
            <div class=" modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp"
                        required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="harga" name="harga" value="5000" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="size" name="size" value="3R" required="">
                </div>
                <p>Masukan Gambar Yang ingin dicetak!(JPG,PNG,JPEG)</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="userfile" placeholder="Masukkan Foto" name="userfile"
                        required="">
                </div>
                <p>Masukkan Bukti Transfer!</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="bukti_tf" placeholder="Masukkan Bukti Transfer"
                        name="bukti_tf" required="">
                </div>
                <p class="text-center">Rp. 5000</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- 4R -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Data Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/tambah_data'); ?>
            <div class=" modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp"
                        required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="harga" name="harga" value="8000" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="size" name="size" value="4R" required="">
                </div>
                <p>Masukan Gambar Yang ingin dicetak!(JPG,PNG,JPEG)</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="userfile" placeholder="Masukkan Foto" name="userfile"
                        required="">
                </div>
                <p>Masukkan Bukti Transfer!</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="bukti_tf" placeholder="Masukkan Bukti Transfer"
                        name="bukti_tf" required="">
                </div>
                <p class="text-center">Rp. 8000</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- 5R -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Data Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/tambah_data'); ?>
            <div class=" modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp"
                        required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="harga" name="harga" value="12000" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="size" name="size" value="5R" required="">
                </div>
                <p>Masukan Gambar Yang ingin dicetak!(JPG,PNG,JPEG)</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="userfile" placeholder="Masukkan Foto" name="userfile"
                        required="">
                </div>
                <p>Masukkan Bukti Transfer!</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="bukti_tf" placeholder="Masukkan Bukti Transfer"
                        name="bukti_tf" required="">
                </div>
                <p class="text-center">Rp. 12000</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- 10R -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Data Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/tambah_data'); ?>
            <div class=" modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp"
                        required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="harga" name="harga" value="18000" required="">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="size" name="size" value="10R" required="">
                </div>
                <p>Masukan Gambar Yang ingin dicetak!(JPG,PNG,JPEG)</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="userfile" placeholder="Masukkan Foto" name="userfile"
                        required="">
                </div>
                <p>Masukkan Bukti Transfer!</p>
                <div class="form-group">
                    <input type="file" class="form-control" id="bukti_tf" placeholder="Masukkan Bukti Transfer"
                        name="bukti_tf" required="">
                </div>
                <p class="text-center">Rp. 18000</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>