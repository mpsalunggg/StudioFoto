<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div>
        <!-- <div style="font-family:arial;">
            <h3 class="text-center">SILAHKAN PILIH JASA PHOTOSHOOT ANDA</h3>
        </div> -->
        <div class=" row mt-5">
            <div class="col-sm-4  text-center">
                <div class="card" style=" border-radius:20px;">
                    <div class="card-body">
                        <img src="<?=base_url('assets/portofolio/camera2.png');?>" alt="" width="110">
                        <h5 class="card-title">PREWEDDING</h5>
                        <a href="<?= base_url('user/prewed'); ?>" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card" style="border-radius:20px;">
                    <div class="card-body">
                        <img src="<?=base_url('assets/portofolio/camera2.png');?>" alt="" width="110">
                        <h5 class="card-title">GRADUATION</h5>
                        <a href="<?= base_url('user/graduation'); ?>" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card" style="border-radius:20px;">
                    <div class="card-body">
                        <img src="<?=base_url('assets/portofolio/camera2.png');?>" alt="" width="110">
                        <h5 class="card-title">YEARBOOK</h5>
                        <a href="<?= base_url('user/yearbook'); ?>" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <a class="btn btn-dark col" href="<?= base_url('user/pesanan_jasa');?>">LIHAT PESANAN JASA</a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->