<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Academia FOJAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.transitions.css')); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.min.css')); ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/educate-custon-icon.css')); ?>">
    <!--
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">

    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/scrollbar/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/metisMenu/metisMenu.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/metisMenu/metisMenu-vertical.css')); ?>">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/calendar/fullcalendar.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/calendar/fullcalendar.print.min.css')); ?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <!-- jquery
		============================================ -->
    <script src="<?php echo e(asset('js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

    <!-- formulario JS
       ============================================ -->

    <script src="<?php echo e(asset('js/formulario.js')); ?>"></script>



    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">



</head>

<?php
$user = Session::get('usuario');
?>

<body>

    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="home"><br><img class="main-logo" src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="" style="width: 200px"/></a>
                <strong><a href="home"><img src="img/logo/logosn.png" alt="" style="width: 100px"/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                                <br>
                            <a class="has-arrow" aria-expanded="false" href="<?php echo e(route('inicio')); ?>">
                                <i class="<?php if($_SERVER['REQUEST_URI'] == '/'): ?> active <?php endif; ?> "></i><span class="educate-icon educate-home "></span><span class="mini-click-non"> Inicio</span>
                            </a>
                        </li>

                        <li>
                            <a class="has-arrow" href="<?php echo e(route('usuarios')); ?>" aria-expanded="false"><span class="fa fa-users "></span> <span class="mini-click-non">Usuarios</span></a>
                        </li>

                        <li>
                            <a class="has-arrow" aria-expanded="false"><span class="educate-icon educate-library "></span> <span class="mini-click-non">Vinculación</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Registro plática informativa" href="<?php echo e(route('registroplatica')); ?>" class="<?php if($_SERVER['REQUEST_URI'] == '/registroplatica'): ?> active <?php endif; ?> "><span class="mini-sub-pro">Registro plática</span></a></li>
                                <li><a title="Test ubica tu financiamiento" href="<?php echo e(route('testubica')); ?>"><span class="mini-sub-pro">Test ubica</span></a></li>
                                <li><a title="Evaluación de la plática informativa" href="<?php echo e(route('evaluacionplaticainfo')); ?>"><span class="mini-sub-pro">Evaluación</span></a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="<?php echo e(route('capacitores')); ?>" aria-expanded="false"><span class="educate-icon educate-professor "></span> <span class="mini-click-non">  Capacitadores</span></a>
                        </li>

                        <li>
                            <a class="has-arrow" href="<?php echo e(route('inicio')); ?>" aria-expanded="false"><span class="educate-icon educate-student"></span><span class="mini-click-non">  Emprendedores</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo e(route('cursos')); ?>" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non"> Cursos</span></a>

                        </li>
                        <li>
                            <a title="Landing Page" href="<?php echo e(route('inicio')); ?>" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Calendario</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo e(route('inicio')); ?>" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non"> Descargas</span></a>

                        </li>

                        <li id="removable">
                            <a class="has-arrow" aria-expanded="false" href="<?php echo e(route('signout')); ?>"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Salir</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" style="width: 120px"/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notificaciones</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                       <h2>Curso </h2>
                                                                        <p>Porfavor cambiar horario curso.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <h2>Emprendimiento Social Colaborativo</h2>
                                                                        <p>Suspención de curso</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">Ver todas las notificaciones</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.png" alt=""  style="width: 30px"/>
                                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                                <span class="hidden-xs"><?php echo e($user->nombre.' '.$user->apellido_paterno); ?></span>
                                                            </a>

														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Mi cuenta</a>
                                                        </li>
                                                        <li><a href="<?php echo e(route('signout')); ?>"><span class="edu-icon edu-locked author-log-ic"></span>Salir</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Inicio" href="<?php echo e(route('inicio')); ?>">Inicio<span class="<?php if($_SERVER['REQUEST_URI'] == '/'): ?> active <?php endif; ?> "></span></a>

                                        </li>

                                        <li><a data-toggle="collapse" data-target="#demoevent" href="<?php echo e(route('usuarios')); ?>">Usuarios <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li>
                                            <a class="has-arrow" aria-expanded="false"><span class="mini-click-non">Vinculación</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Registro plática informativa" href="<?php echo e(route('registroplatica')); ?>" class="<?php if($_SERVER['REQUEST_URI'] == '/registroplatica'): ?> active <?php endif; ?> "><span class="mini-sub-pro">Registro plática</span></a></li>
                                                <li><a title="Test ubica tu financiamiento" href="<?php echo e(route('testubica')); ?>"><span class="mini-sub-pro">Test ubica</span></a></li>
                                                <li><a title="Evaluación de la plática informativa" href="<?php echo e(route('evaluacionplaticainfo')); ?>"><span class="mini-sub-pro">Evaluación</span></a></li>

                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="capacitores">Capacitadores<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="cursos">Emprendedores<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="<?php echo e(route('cursos')); ?>>Cursos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Calendario <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Descargas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->

        </div>

        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

       <!-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <strong>Copyright &copy; 2019 Fojal.</strong> All rights
                        reserved.
                    </div>
                </div>
            </div>
        </div>-->
    </div>


    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>

    <!-- calendar JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>

    <link rel="stylesheet" href="css/editor/select2.css">

    <!-- datapicker JS
    ============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>



    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>


<?php /* C:\laragon\www\academia_fojal\resources\views//main.blade.php */ ?>