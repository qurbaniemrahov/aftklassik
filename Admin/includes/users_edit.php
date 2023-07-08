<?php include('../includes/header.php'); ?>
<?php include('../includes/sidebar.php'); ?>


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
                                    <!-- <span class="account-user-avatar">
                                        <img src="../adminassets/images/users/avatar-1.jpg" alt="user-image"
                                             class="rounded-circle">
                                    </span> -->
                            <span>
                                        <span class="account-user-name">Aftklassik</span>
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
                        <li class="breadcrumb-item"><a href="../pages/home.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../pages/users.php">İstifadəçilər</a></li>
                        <!-- <li class="breadcrumb-item active">FutureArt </li> -->
                    </ol>
                </div>
                <h4 class="page-title">Aftklassik </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="../controller/admin_user.php" method="POST"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="n3wFwIBQG07HiMrxd4UBfrZmDPB6g1IysFDbnzEJ">                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Ad </label>
                                                        <input type="text" id="name" class="form-control"
                                                               placeholder="Ad" name="user_name"
                                                               value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">E-mail</label>
                                                        <input type="text" id="email" class="form-control"
                                                               placeholder="E-mail" name="user_email"
                                                               value="">
                                                    </div>
                                                </div>
                                            </div> <!-- end tab-content-->

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                </div> <!-- end card-body-->
                            </div> <!-- end card -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content">
                                                                                                      <div class="mb-3">
                                                        <label for="password" class="form-label">Şifrə</label>
                                                        <input type="password" id="password" class="form-control"
                                                               placeholder="Şifrə" name="user_password"
                                                               value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="submit" name="user_edit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
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
<?php include('../includes/footer.php'); ?>