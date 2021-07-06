<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nura Admin - Dashboard</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/mesProjets/GESECOLE/src/view/public/assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="http://localhost/mesProjets/GESECOLE/src/view/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="http://localhost/mesProjets/GESECOLE/src/view/public/assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="http://localhost/mesProjets/GESECOLE/src/view/public/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="http://localhost/mesProjets/GESECOLE/src/view/public/assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/mesProjets/GESECOLE/src/view/public/assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="http://localhost/mesProjets/GESECOLE/src/view/public/index.html" class="logo">
                    <img alt="Logo" src="http://localhost/mesProjets/GESECOLE/src/view/public/assets/images/logo.png" />
                    <span>Nura Admin</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="http://localhost/mesProjets/GESECOLE/src/view/public/#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Doe</b>
                                    <span>New message received</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Michael Smith</b>
                                    <span>New message received</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Lenons</b>
                                    <span>New message received</span>
                                    <small class="text-muted">Yesterday, 18:27</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/mail-all.html" class="dropdown-item notify-item notify-all">
                                View All Messages
                            </a>

                        </div>

                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="http://localhost/mesProjets/GESECOLE/src/view/public/#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="http://localhost/mesProjets/GESECOLE/src/view/public/assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="http://localhost/mesProjets/GESECOLE/src/view/public/assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="http://localhost/mesProjets/GESECOLE/src/view/public/assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="http://localhost/mesProjets/GESECOLE/src/view/public/#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="http://localhost/mesProjets/GESECOLE/src/view/public/#" aria-haspopup="false" aria-expanded="false">
                            <img src="http://localhost/mesProjets/GESECOLE/src/view/public/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, admin</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/profile.html" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <li class="submenu">
                            <a class="active" href="http://localhost/mesProjets/GESECOLE/src/view/public/index.html">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/users.html">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/blog.html">
                                <i class="fas fa-file-alt"></i>
                                <span> Blog </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/mail-all.html">
                                <span class="label radius-circle bg-danger float-right">18</span>
                                <i class="fas fa-envelope"></i>
                                <span> Mailbox </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Slider </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/charts.html">
                                <i class="fas fa-chart-line"></i>
                                <span> Charts </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <i class="fas fa-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <i class="fas fa-laptop"></i>
                                <span> User Interface </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/ui-tooltips.html">Tooltips and Popovers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <i class="fab fa-wpforms"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-general.html">General Elements</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-select2.html">Select2</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-validation.html">Form Validation</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-text-editor.html">Text Editors</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-upload.html">Multiple File Upload</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-datetime-picker.html">Date and Time Picker</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/forms-color-picker.html">Color Picker</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <i class="fas fa-file-image"></i>
                                <span> Multimedia </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/media-fancybox.html">
                                        <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/media-masonry.html">Masonry</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/media-lightbox.html">Lightbox</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/media-owl-carousel.html">Owl Carousel</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/media-image-magnifier.html">Image Magnifier</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <i class="fas fa-star"></i>
                                <span> Plugins </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/star-rating.html">Star Rating</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/range-sliders.html">Range Sliders</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/tree-view.html">Tree View</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/sweetalert.html">SweetAlert</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/counter-up.html">Counter-Up</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <i class="far fa-copy"></i>
                                <span> Example Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/page-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/page-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/page-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/page-blank.html">Blank Page</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                <span class="label radius-circle bg-primary float-right">9</span>
                                <i class="fas fa-indent"></i>
                                <span> Menu Levels </span>
                            </a>
                            <ul>
                                <li>
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                        <span>Second Level</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                        <span>Third Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                                <span>Third Level Item</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://localhost/mesProjets/GESECOLE/src/view/public/#">
                                                <span>Third Level Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <li class="submenu">
                                <a class="pro" href="http://localhost/mesProjets/GESECOLE/src/view/public/pro.html">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span> PRO Version </span>
                                </a>
                            </li>

                            <li class="submenu">
                                <a target="_blank" href="http://localhost/mesProjets/GESECOLE/src/view/public/https://nura24.com">
                                    <i class="fas fa-th"></i>
                                    <span> Nura24 Free Suite </span>
                                </a>
                            </li>

                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">