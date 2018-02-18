<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Identifikasi Kerusakan Laptop</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
    </head>


    <body class="theme-black ">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Tunggu Sebentar ya...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Top Bar -->


        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.html"><b>Sistem Identifikasi Kerusakan Laptop</b></a>

                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">help</i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php base_url(); ?>Login" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">input</i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>




        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/images/user.png" width="48" height="48" alt="User" />
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu " >
                    <ul class="list ">
                        <li class="header col-pink"><center><h5>MENU USER</h5></center></li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>dashboard">
                                <i class="material-icons active">home</i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="" >
                                <i class="material-icons">forum</i>
                                <span>Kosultasi Kerusakan Laptop</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" >
                                <i class="material-icons">computer</i>
                                <span>Informasi Kerusakan</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" >
                                <i class="material-icons">info</i>
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" >
                                <i class="material-icons">help</i>
                                <span>Help</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal body bg-black">
                    <div class="copyright">
                        <center>Agustinus Afrano Amran &copy; 2018 </center>
                    </div>
                    <div class="version">
                        <center>TI-USD 2014</center>
                    </div>
                </div>
            </aside>
        </section>

        <section class="content ">
            <div class="container-fluid ">
                <div class="row clearfix">


                    <?php
                    if (isset($isi)) {
                        $this->load->view($isi);
                    } else {
                        echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body bg-teal">
                                <div><marquee>Selamat Datang Di Sistem Identifikasi Kerusakan Laptop Menggunakan Metode Case-Based Reasoning dengan Algoritma Nearest Neighbor</marquee></div>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>

                </div>



            </div>
        </section>






        <!-- Jquery Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.js"></script>

        <!-- ChartJs -->
        <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.bundle.js"></script>

        <!-- Flot Charts Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.time.js"></script>

        <!-- Jquery DataTable Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>
        <!-- Sparkline Chart Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>

        <!-- Demo Js -->
        <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
    </body>
</html>