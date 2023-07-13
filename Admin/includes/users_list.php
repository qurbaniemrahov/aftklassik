
<?php 
include('../../config/connection.php');
include('../controller/admin_user.php');
?>


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
                            <a href="./logout" class="dropdown-item notify-item">
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
                        <li class="breadcrumb-item"><a href="./home">Dashboard</a></li>
                        <li class="breadcrumb-item active">İstifadəçilər</li>
                    </ol>
                </div>
                <h4 class="page-title">İstifadəçilər</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
                        <div class="card">
                <div class="card-body">
                    <div class="col-sm-4">
                        <a href="../includes/user_create.php" class="btn btn-danger mb-2">
                        <i class="mdi mdi-plus-circle me-2"></i>
                        Add
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered w-100 dt-responsive nowrap" method="GET" action="../controller/admin_user.php">
                            <thead class="table-light">
                            <tr>
                                <th class="all">#</th>
                                <th>Ad</th>
                                <th>Email</th>
                                <th style="width: 85px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <form action="../controller/admin_user.php" method="POST">
                                    
                            <?php if (isset($result) && !empty($result)) { ?>
                                <?php foreach ($result as $row) { ?>

                                                             <tr>
                                    <td>
                                        <p class="m-0 d-inline-block align-middle font-16">
                                        <?php echo $row['id']; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="m-0 d-inline-block align-middle font-16">
                                        <?php echo $row['user_name']; ?>
                                        </p>
                                    </td>

                                    <td>
                                        <p class="m-0 d-inline-block align-middle font-16">
                                        <?php echo $row['user_email']; ?>
                                        </p>
                                    </td>

                                    <td class="table-action">
                                      <a name="user_edit" value="" class="btn btn-primary" href="../includes/users_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    </td>
<!-- <form action="../../admin_user.php" method="POST">
<td class="table-action">
                                        <a href=""
                                           class="action-icon" name="user_delete" value = ""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
</form> -->
<td>
<form action="../controller/admin_user.php" method = "POST">
 
<button onclick="confirmDeleteUser(<?php echo $row['id']; ?>)"   name="user_delete" value = "<?php echo $row['id']; ?>" class="btn btn-danger">Delete</button>
</form>
</td>



                                 
                                </tr> 

                                
        
                                <?php } ?>
                                <?php } else { ?>
            <tr>
                <td colspan="4">No users found.</td>
            </tr>
        <?php } ?>
                                </form>

                                
                                                        </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        
                    </div>
                </div> <!-- end card-body-->


            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>



            </div>
            <!-- container -->

        </div>
        <!-- content -->

   

    </div>

    <script>
    function confirmDeleteUser(userId) {
        var confirmation = confirm("Are you sure you want to delete this user?");

        if (confirmation) {
            // Perform the deletion by making an AJAX request to the server
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../controller/admin_user.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response from the server
                    // You can display a success message or update the table, etc.
                    console.log(xhr.responseText);
                }
            };
            xhr.send('user_delete=' + userId);
        }
    }
</script>







  
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->