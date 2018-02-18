<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Login Case Based Reasoning </title>
        <!-- Favicon-->
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <br><br><br>
            </div>
            <div class="card">
                <div class="body ">
                    <form action="<?= site_url('login/cek_login') ?>" id="form-login" method="post" accept-charset="utf-8">
                        <br>
                        <div class="msg col-cyan "><b>Halaman Login Metode Case Based Reasoning</b> </div>
                        <?php
                        if (validation_errors()) {
                            echo "<div><br> <text style='color : red'>" . validation_errors() . "</div>";
                        }
                        if ($this->session->flashdata('pesan_error')) {
                            echo "<center><br><text style='color : red'>" . $this->session->flashdata('pesan_error') . "</center>";
                        }
                        ?>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons col-cyan">person</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Masukan Email" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons col-cyan">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Login</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                <a href="sign-up.html">Daftar Sekarang!</a>
                            </div>
                            <div class="col-xs-6 align-right ">
                                <a href="forgot-password.html">Lupa Sandi?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Jquery Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>
        <!-- Validation Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages/examples/sign-in.js"></script>
    </body>
</html>