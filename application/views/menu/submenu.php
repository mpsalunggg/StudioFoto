<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-11">
        <?php if(validation_errors()) : ?>
        <div class="col alert alert-danger ml-4" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif; ?>

        <?= $this->session->flashdata('message');?>

        <a href="" class="btn btn-dark btn-sm btn-block ml-4 mb-4" data-toggle="modal"
            data-target="#newexampleModal">Tambah Submenu</a>
        <table class="table table-hover ml-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Menu</th>
                    <th scope="col">URL</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Acitive?</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($subMenu as $sm): ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $sm['title']; ?></td>
                    <td><?= $sm['menu']; ?></td>
                    <td><?= $sm['url']; ?></td>
                    <td><?= $sm['icon']; ?></td>
                    <td><?= $sm['is_active']; ?></td>
                    <td>
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#editModal<?php echo $sm['id']; ?>">Edit</a>
                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deletesubModal<?php echo $sm['id']; ?>">Delete</a>
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
<div class="modal fade" id="newexampleModal" tabindex="-1" aria-labelledby="newexampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newexampleModalLabel">Add Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" placeholder="Submenu Title" name="title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach($menu as $m): ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" placeholder="Url Submenu" name="url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" placeholder="Icon Submenu" name="icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active"
                                checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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
foreach($subMenu as $sm): $no++; ?>
<!-- Model Edit -->
<div class="modal fade" id="editModal<?php echo $sm['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Add Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenuEdit'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" placeholder="Submenu Title" name="id"
                            value="<?= $sm['id'] ?>">
                        <input type="text" class="form-control" id="title" placeholder="Submenu Title" name="title"
                            value="<?= $sm['title']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option>Select Menu</option>
                            <?php foreach($menu as $m): ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" placeholder="Url Submenu" name="url"
                            value="<?= $sm['url']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" placeholder="Icon Submenu" name="icon"
                            value="<?= $sm['icon']; ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active"
                                value="<?= $sm['is_active']; ?>" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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

<?php foreach($subMenu as $sm): ?>
<div class="modal fade" id="deletesubModal<?php echo $sm['id']; ?>" tabindex="-1" aria-labelledby="deletesubModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletesubModalLabel">Yakin Ingin Hapus?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a type="button" class="btn btn-primary" href="<?= base_url('menu/deletesubMenu/').$sm['id']; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>