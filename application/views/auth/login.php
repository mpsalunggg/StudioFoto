<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <style>
    /* Required for full background image */

    html,
    body,
    header,
    .view {
        height: 100%;
    }

    @media (max-width: 740px) {

        html,
        body,
        header,
        .view {
            height: 1000px;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .view {
            height: 650px;
        }
    }

    .top-nav-collapse {
        background-color: #3f51b5 !important;
    }

    .navbar:not(.top-nav-collapse) {
        background: transparent !important;
    }

    @media (max-width: 991px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5 !important;
        }
    }

    .rgba-gradient {
        background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%));
        background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
    }

    .card {
        background-color: rgb(72, 82, 69, 0.25);
    }

    .md-form label {
        color: #ffffff;
    }

    h6 {
        line-height: 1.7;
    }
    </style> -->

</head>

<body class="bg-gradient-dark"
    style="background-image: url('<?= base_url('assets/portofolio/background.jpg'); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="container">

        <!-- Outer Row -->
        <div class=" row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius:20px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-sm">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/portofolio/camera2.png'); ?>" alt="" width="100">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email"
                                                placeholder="Enter Email Address..." name="email"
                                                value="<?= set_value('email') ?>">
                                            <?= form_error('email','<small class="text-danger pl-3">','</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                placeholder="Password" name="password">
                                            <?= form_error('password','<small class="text-danger pl-3">','</small>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-dark btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration') ?>">Silahkan
                                            Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>