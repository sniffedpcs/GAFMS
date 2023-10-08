<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | GAF MS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="GHANA ARMED FORCES MANAGEMENT SYSTEM" name="description" />
        <meta content="Sniffedpcs" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/gaf.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Toastr -->
        <link rel="stylesheet" href="assets/css/toastr.min.css">
    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/gaf.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/gaf.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="/" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/gaf.png" alt="" height="25">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/gaf.png" alt="" height="65">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/user1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Name Name</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="profile.php"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu list-unstyled" id="side-menu">
                                <li class="menu-title" key="t-menu">Menu</li>

                                <li>
                                    <a href="/" class="waves-effect">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">Dashboard</span>
                                    </a>
                                </li>

                                <li class="menu-title" key="t-pages">Components</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-customize"></i>
                                        <span key="t-authentication">Fields</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="appointments" key="t-appointment">Appointments</a></li>
                                        <li><a href="ranks" key="t-rank">Ranks</a></li>
                                        <li><a href="remarks" key="t-remark">Remarks</a></li>
                                        <li><a href="units" key="t-units">Units</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="postings" class="waves-effect">
                                        <i class="bx bx-transfer-alt"></i>
                                        <span key="t-posting">Postings</span>
                                    </a>
                                </li>

                                <li class="menu-title" key="t-users">Users</li>

                                <li>
                                    <a href="users" class="waves-effect">
                                        <i class="bx bx-male"></i>
                                        <span key="t-users">Users</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            <!-- Left Sidebar End -->

            