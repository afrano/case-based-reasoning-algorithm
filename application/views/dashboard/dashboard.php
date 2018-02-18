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




    <body class="theme-pink ">
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
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>1 pengguna baru</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>1 Kasus Baru Masuk</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
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
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Agustinus Afrano</div>
                        <div class="email">afranoamran16@gmail.com</div>
                        <div class="btn-group user-helper-dropdown ">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons col-blue">person</i>Profile</a></li>
                                <li role="seperator" class="divider"></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>login/logout"><i class="material-icons col-red">settings_power</i><text class="col-red">Logout</text></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu " >
                    <ul class="list ">
                        <li class="header col-pink"><center><h5>Menu Admin</h5></center></li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>dashboard">
                                <i class="material-icons active">home</i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">storage</i>
                                <span>Data Kasus</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?php base_url(); ?>Kerusakan">
                                        <i class="material-icons col-red">donut_large</i>
                                        <span>Data Kerusakan</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <i class="material-icons col-amber">donut_large</i>
                                        <span>Data Kasus User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">computer</i>
                                <span>Data Gejala</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?php base_url(); ?>Kerusakan">
                                        <i class="material-icons col-red">donut_large</i>
                                        <span>Lihat Data Gejala</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <i class="material-icons col-amber">donut_large</i>
                                        <span>Input Data Gejala</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">build</i>
                                <span>Data Solusi</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?php base_url(); ?>Kerusakan">
                                        <i class="material-icons col-red">donut_large</i>
                                        <span>Lihat Data Solusi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="material-icons col-amber">donut_large</i>
                                        <span>Input Data Solusi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">wb_incandescent</i>
                                <span>Knowledge</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?php base_url(); ?>Kerusakan">
                                        <i class="material-icons col-red">donut_large</i>
                                        <span>Lihat Knowledge</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="material-icons col-amber">donut_large</i>
                                        <span>Input Knowledge</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Data User</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="">
                                        <i class="material-icons col-red">donut_large</i>
                                        <span>Lihat Data User</span>
                                    </a>                                    
                                </li>
                            </ul>
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


            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a>ACCOUNT</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
                        <div class="demo-settings">
                            <p>Account Settings</p>
                            <ul class="setting-list">
                                <li>
                                    <span>Ubah Password</span>
                                    <div class="switch">
                                        <label><input type="checkbox" checked><span class="lever"></span></label>
                                    </div>
                                </li>

                            </ul>
                            <ul class="setting-list">
                                <li>
                                    <a href="<?php echo base_url(); ?>login/logout">
                                        <span><b>Logout</b></span>
                                        <div class="switch">
                                            <label><i class="material-icons col-red">settings_power</i></label>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
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