<body
    style="background-image: url('<?= base_url('assets/portofolio/background.jpg'); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto" style="border-radius:20px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="<?= base_url('assets/portofolio/camera2.png'); ?>" alt="" width="100">
                                <h1 class="h4 text-gray-900 mb-4">Register!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration')?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name"
                                        placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name','<small class="text-danger pl-3">','</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email"
                                        placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email','<small class="text-danger pl-3">','</small>') ?>
                                </div>
                                <div class=" form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1"
                                            placeholder="password" name="password1">
                                        <?= form_error('password1','<small class="text-danger pl-3">','</small>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2"
                                            placeholder="Repeat Password" name="password2">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth')?>">Sudah Punya Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>