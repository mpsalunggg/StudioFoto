<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message');?>

    <?php echo form_open_multipart('user/tambah_jasa'); ?>
    <div class="form-group">
        <label for="formGroupExampleInput">Nama</label>
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nama" value="Graduation"
            name="jenis_jasa">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Alamat Lengkap</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ALamat" name="alamat">
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="formGroupExampleInput3">Tanggal Boking</label>
                <input type="date" class="form-control" id="formGroupExampleInput3"
                    placeholder="Another input placeholder" name="date">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="formGroupExampleInput4">Paket</label>
                <select class="form-control" name="paket">
                    <option value="">Paket</option>
                    <option>PAKET SILVER | 10 Foto + Cetak | Rp.250.000</option>
                    <option>PAKET GOLD |20 Foto + Cetak | Rp.450.000</option>
                </select>
            </div>
        </div>
        <div class=" col-4">
            <div class="form-group">
                <label for="formGroupExampleInput5">No Hp</label>
                <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="No HP" name="no_hp">
            </div>
        </div>
        <div class="col mb-3">
            <label for="formGroupExampleInput7">Lokasi Photoshoot</label>
            <input type="text" class="form-control" id="formGroupExampleInput7" placeholder="Lokasi" name="lokasi">
        </div>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput6">Bukti Panjar</label>
        <input type="file" class="form-control" id="userfile" placeholder="Bukti" name="userfile">
    </div>
    <button type="submit" class="btn btn-dark col">Pesan</button>
    <?php echo form_close(); ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->