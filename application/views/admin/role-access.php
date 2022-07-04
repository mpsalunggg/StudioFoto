<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-6">
        <?= $this->session->flashdata('message');?>

        <h5 class="ml-4">Anda Sedang Berada Di Role</h5>
        <div class="card text-white bg-dark mb-3 ml-4" style="max-width: 18rem;">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="mt-2"><?= $role['role']; ?></h5>
                    </div>
                    <div class="col-4">
                        <a href="<?= base_url('admin/role'); ?>" class="btn btn-light ml-3">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-hover ml-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Access</th>
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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?>
                                data-role="<?= $role['id'];?>" data-menu="<?= $m['id'];?>">
                        </div>
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