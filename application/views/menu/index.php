<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-6">
        <?= form_error('menu', '<div class="col alert alert-danger ml-4" role="alert">','</div>'); ?>
        <?= $this->session->flashdata('message');?>

        <a href="" class="btn btn-dark btn-sm btn-block ml-4 mb-4" data-toggle="modal"
            data-target="#exampleModal">Tambah Menu</a>
        <table class="table table-hover ml-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($menu as $m): ?>
                <tr>
                    <th scope="row">
                        <?= $i; ?>
                    </th>
                    <td><?= $m['menu']; ?>
                    </td>
                    <td>
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#editModal<?php echo $m['id']; ?>">Edit</a>
                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModal<?php echo $m['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" placeholder="Nama Menu" name="menu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $no = 0;
foreach($menu as $m): $no++; ?>
<div class="modal fade" id="editModal<?php echo $m['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/edit'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" value="<?= $m['id'] ?>">
                        <input type="text" class="form-control" id="menu" placeholder="Nama Menu" name="menu"
                            value="<?= $m['menu'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Modal Delete -->
<?php foreach($menu as $m): ?>
<div class="modal fade" id="deleteModal<?php echo $m['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Yakin Ingin Hapus?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a type="button" class="btn btn-primary" href="<?= base_url('menu/deleteMenu/').$m['id']; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>