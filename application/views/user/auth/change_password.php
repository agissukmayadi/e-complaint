<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/') ?>icon.jpg" />
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/Auth/') ?>css/main.css">
    <!--===============================================================================================-->
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/toastr/toastr.min.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="padding: 150px;">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets/img/') ?>ngadu.png" width="90%" alt="IMG">

                </div>

                <form class="login100-form" method="POST" action="<?= base_url('Auth_user/change_password') ?>">
                    <span class="login100-form-title">
                        Forgot Password
                    </span>
                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password" id="password" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    echo form_error('password', '<div style="margin-top: -5px; margin-bottom: 5px;">
                        <small class="text-danger mx-2">', '</small></div>')
                    ?>
                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password1" placeholder="Re-type Password" id="password" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    echo form_error('password1', '<div style="margin-top: -5px; margin-bottom: 5px;">
                        <small class="text-danger mx-2">', '</small></div>')
                    ?>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
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