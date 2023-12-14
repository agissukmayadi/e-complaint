<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets/img/') ?>ngadu.png" width="90%" alt="IMG" style="margin-top: 20px; margin-left:40px">
                </div>

                <form class="login100-form" method="POST" action="<?= base_url('Auth_user') ?>">
                    <span class="login100-form-title">
                        User Login
                    </span>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    echo form_error('username', '<div style="margin-top: -5px; margin-bottom: 5px;">
                        <small class="text-danger mx-2">', '</small></div>')
                    ?>

                    <div class="wrap-input100">
                        <input class=" input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    echo form_error('password', '<div style="margin-top: -5px; margin-bottom: 5px;">
                        <small class="text-danger mx-2">', '</small></div>')
                    ?>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="<?= base_url('Auth_user/forgot_pass_validation') ?>">
                            <span class="txt1">
                                Forgot
                            </span>
                            Password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <a href="<?= base_url('Welcome') ?>">
                            <button class="" type="button" style="color:#106eea">
                                <i class="fa fa-home"></i> Back to Home
                            </button>
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="<?= base_url('Auth_user/register') ?>">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
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