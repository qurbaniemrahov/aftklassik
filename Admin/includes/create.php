<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description"/>
    <meta content="Coderthemes" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="">

    <!-- third party css -->
    <link href="../adminassets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
    <link href="../adminassets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css"/>
    <link href="../adminassets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="../adminassets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../adminassets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style"/>
    <link href="../adminassets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <style>
        table .form-check {
            display: none;
        }
    </style>
</head>

<body class="loading"
      data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- LOGO -->
        <a target="_blank" href="#" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img style="width:70%;height:auto;" src="../adminassets/images/proton-logo_white.png"
                             alt="" height="16">
                    </span>
            <span class="logo-sm">
                        <img style="width:100%;height:auto;" src="../adminassets/images/proton-logo_white.png"
                             alt="" height="16">
                    </span>
        </a>

        <!-- LOGO -->
        <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="16">
                    </span>
            <span class="logo-sm">
                        <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
        </a>

        <div class="h-100" id="leftside-menu-container" data-simplebar>

            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title side-nav-item">İdarə paneli</li>

                <li class="side-nav-item">
                    <a href="../home" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Dashboards </span>
                    </a>
                </li>


                
                <li class="side-nav-item">
                    <a href="../slider_list" class="side-nav-link">
                        <i class="fa-solid fa-image"></i>
                        <span>Slider</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="../about_list" class="side-nav-link">
                        <i class="fa-solid fa-address-card"></i>
                        <span>Haqqımızda</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="../service_list" class="side-nav-link">
                        <i class="fa-brands fa-servicestack"></i>
                        <span>Xidmətlərimiz</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#haqqimizda" aria-expanded="false" aria-controls="haqqimizda" class="side-nav-link">
                        <i class="fa-solid fa-hands-holding-circle"></i>
                        <span>Layihələrimiz</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="haqqimizda">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="../photo_list">Fotolar</a>
                            </li>
                            <li>
                                <a href="../video_list">Videolar</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a href="../stat_list" class="side-nav-link">
                        <i class="fa-solid fa-chart-column"></i>
                        <span> Statistika </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="../comment_list" class="side-nav-link">
                        <i class="fa-solid fa-message"></i>
                        <span> Müştəri rəyləri </span>
                    </a>
                </li>

                


                

                <li class="side-nav-item">
                    <a href="../pdf_list" class="side-nav-link">
                        <i class="fa-solid fa-file-pdf"></i>
                        <span>PDF</span>
                    </a>
                </li>

              
                <li class="side-nav-item">
                    <a href="../admin_settings" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span>Tənzimləmələr</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="../users_list" class="side-nav-link">
                        <i class="uil-user"></i>
                        <span>İstifadəçilər</span>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">


                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false"
                           aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="../adminassets/images/users/avatar-1.jpg" alt="user-image"
                                             class="rounded-circle">
                                    </span>
                            <span>
                                        <span class="account-user-name">FutureArt</span>
                                        <span class="account-position">Adminstrator</span>
                                    </span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>
                            <!-- item-->
                            <a href="../logout" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="button-menu-mobile open-left">
                    <i class="mdi mdi-menu"></i>
                </button>

            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">
                    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="../home">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../slider_list">Slider</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">

                        <div class="card">
                <div class="card-body">
                    <form action="../slider_store" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="n3wFwIBQG07HiMrxd4UBfrZmDPB6g1IysFDbnzEJ">                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <div class="tab-pane  show active"
                                                         id="form-select-az">
                                                         <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                                            <li class="nav-item">
                                                                <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                                    <span class="d-none d-md-block">Az</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                                    <span class="d-none d-md-block">En</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                                    <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                                    <span class="d-none d-md-block">Ru</span>
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        <div class="tab-content">
                                                        <div class="tab-pane show active  " id="home1">

                                                            <div class="mb-3">
                                                                <label for="title" class="form-label">Başlıq (Az)
                                                                </label>
                                                                <input type="text" id="title" class="form-control"
                                                                       placeholder="Başlıq" name="title[]" 
                                                                       value="">
                                                            </div>

                                                    
                                                            <div class="mb-3">
                                                                <label for="text" class="form-label">Text(Az)
                                                                    </label>
                                                                <textarea id="ckeditor2"
                                                                            name="text[]"></textarea>
                                                                <script>
                                                                    CKEDITOR.replace('ckeditor2', {
                                                                        filebrowserUploadUrl: '/assets/filebrowser/plugin.js'
                                                                    });
                                                                </script>
                                                            </div>
                                                            
                                                            <input type="hidden" name="lang[]" value="az">
                                                        </div>
                                                        <div class="tab-pane" id="profile1">
                                                        
                                                            <div class="mb-3">
                                                                <label for="title" class="form-label">Başlıq (En)
                                                                </label>
                                                                <input type="text" id="title" class="form-control"
                                                                       placeholder="Başlıq" name="title[]" 
                                                                       value="">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="text" class="form-label">Text(En)
                                                                    </label>
                                                                <textarea id="ckeditor4"
                                                                        name="text[]"></textarea>
                                                                <script>
                                                                    CKEDITOR.replace('ckeditor4', {
                                                                        filebrowserUploadUrl: '/assets/filebrowser/plugin.js'
                                                                    });
                                                                </script>
                                                            </div>

                                                            <input type="hidden" name="lang[]" value="en">
                                                        </div>
                                                        <div class="tab-pane" id="settings1">

                                                            <div class="mb-3">
                                                                <label for="title" class="form-label">Başlıq (Ru)
                                                                </label>
                                                                <input type="text" id="title" class="form-control"
                                                                       placeholder="Başlıq" name="title[]" 
                                                                       value="">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="text" class="form-label">Text(Ru)
                                                                    </label>
                                                                <textarea id="ckeditor7"
                                                                        name="text[]"></textarea>
                                                                <script>
                                                                    CKEDITOR.replace('ckeditor7', {
                                                                        filebrowserUploadUrl: '/assets/filebrowser/plugin.js'
                                                                    });
                                                                </script>
                                                            </div>
                                                            
                                                            <input type="hidden" name="lang[]" value="ru">
                                                        </div>
                                                        
                                                    </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                                                                </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- <div class="col-lg-12">
                                            </div> -->
                                      
                                            <div class="mb-3">
                                                            <label for="menu_type" class="form-label">Photo</label>
                                                            <input type="file" name="img" id="menu_type" class="form-control" required>
                                                        </div>
                                                        <div class="col-xl-12 d-flex justify-content-end">
                                                            <button tton type="submit" class="btn btn-primary">Saxla</button>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © İşinizdəki müsbət zərrəcik - <a href="#"><strong>proton.az</strong></a>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="end-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="end-bar-toggle float-end">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
    </div>

    <div class="rightbar-content h-100" data-simplebar>

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
            </div>

            <!-- Settings -->
            <h5 class="mt-3">Color Scheme</h5>
            <hr class="mt-1"/>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light"
                       id="light-mode-check" checked>
                <label class="form-check-label" for="light-mode-check">Light Mode</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark"
                       id="dark-mode-check">
                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
            </div>


            <!-- Width -->
            <h5 class="mt-4">Width</h5>
            <hr class="mt-1"/>
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                <label class="form-check-label" for="fluid-check">Fluid</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                <label class="form-check-label" for="boxed-check">Boxed</label>
            </div>


            <!-- Left Sidebar-->
            <h5 class="mt-4">Left Sidebar</h5>
            <hr class="mt-1"/>
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                <label class="form-check-label" for="default-check">Default</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                <label class="form-check-label" for="light-check">Light</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                <label class="form-check-label" for="dark-check">Dark</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                <label class="form-check-label" for="fixed-check">Fixed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                <label class="form-check-label" for="condensed-check">Condensed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                <label class="form-check-label" for="scrollable-check">Scrollable</label>
            </div>

            <div class="d-grid mt-4">
                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                   class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
            </div>
        </div> <!-- end padding-->

    </div>
</div>

<div class="rightbar-overlay"></div>
<!-- /End-bar -->


<!-- bundle -->
<script src="../adminassets/js/vendor.min.js"></script>
<script src="../adminassets/js/app.min.js"></script>

<!-- third party js -->
<script src="../adminassets/js/vendor/apexcharts.min.js"></script>
<script src="../adminassets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../adminassets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<script src="../adminassets/js/vendor/jquery.dataTables.min.js"></script>
<script src="../adminassets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="../adminassets/js/vendor/dataTables.responsive.min.js"></script>
<script src="../adminassets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="../adminassets/js/pages/demo.datatable-init.js"></script>
<script src="../adminassets/js/vendor/dataTables.checkboxes.min.js"></script>
<script src="../adminassets/js/vendor/dropzone.min.js"></script>
<script src="../adminassets/js/ui/component.fileupload.js"></script>
<script src="../adminassets/js/pages/demo.dashboard.js"></script>
<script src="../adminassets/js/pages/demo.products.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });
</script>

</body>
</html>