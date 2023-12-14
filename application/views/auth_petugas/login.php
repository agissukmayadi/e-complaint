<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/') ?>icon.jpg" />


    <title>Petugas</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/template/NiceAdmin/') ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?= base_url('assets/template/NiceAdmin/') ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= base_url('assets/template/NiceAdmin/') ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/template/NiceAdmin/') ?>css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?= base_url('assets/template/NiceAdmin/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/NiceAdmin/') ?>css/style-responsive.css" rel="stylesheet" />
    <script src="<?= base_url('assets/template/NiceAdmin/') ?>js/html5shiv.js"></script>
    <script src="<?= base_url('assets/template/NiceAdmin/') ?>js/respond.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/toastr/toastr.min.css">
</head>

<body class="login-img3-body">

    <div class="container">

        <form class="login-form" action="<?= base_url('Auth_petugas') ?>" method="POST">

            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" placeholder="Username" autofocus name="username" value="<?= set_value('username') ?>" autocomplete="off">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button class="btn btn-primary btn-lg btn-block mb-2" type="submit">Login</button>
                <br>
                <div class="container text-center">
                    <a href="<?= base_url('Welcome') ?>">
                        <i class="fa fa-home"></i> Back to Home
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!--===============================================================================================-->
    <script src="<?= base_url('assets/template/Auth/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/template/Auth/') ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/template/Auth/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/template/Auth/') ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/template/Auth/') ?>vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/template/Auth/') ?>js/main.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/toastr/toastr.min.js"></script>
    <script>
        <?= $this->session->flashdata('failed_msg') ?>
        <?= $this->session->flashdata('success_msg') ?>
    </script>
</body>

</html>