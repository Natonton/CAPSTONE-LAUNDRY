<?php
    include "conn.php";
    session_start();
    if(empty($_SESSION)){
        ?> 
            <script>
                alert("Session Expired Please Login Again");
                window.location.href="index.php";
            </script>
        <?php
    }
    else{
        $e = $_SESSION['email'];
        $get_admin_info = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$e'");
        while($row = mysqli_fetch_object($get_admin_info)){
            $fn = $row -> fname;
            $ln = $row -> lname;
            $name = $fn.' '.$ln;
        }
    }
?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin  - Accepted/Active Appoinments</title>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <!-- font-awesome 6.3.0 -->
        <script src="https://kit.fontawesome.com/d42dec7a23.js" crossorigin="anonymous"></script> 
    </head> 

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminhome.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fa-solid fa-jug-detergent"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">LDG Laundry Admin</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="adminhome.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="pending.php">Pending Appointments</a>
                            <a class="collapse-item active" href="active.php">Active Appointments</a>
                            <a class="collapse-item" href="history.php">History</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <!-- Nav Item - Promos and Pricing -->
                <li class="nav-item">
                        <a class="nav-link" href="pnp.php">
                            <i class="fa-solid fa-tags"></i>
                            <span>Promos and Pricings</span>
                        </a>
                </li>
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-id-card"></i>
                    <span>Profiles</span>
                </a>
                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="walkins.php">Walk ins</a>
                        <a class="collapse-item" href="profiles.php">Members</a>
                    </div>
                </div>
            </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Navbar -->
                        
                        <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <?php 
                                    $get_p = mysqli_query($conn, "SELECT * FROM appointments WHERE status = 'Pending' ");
                                    $n = mysqli_num_rows($get_p);
                                ?>
                                <span class="badge badge-danger badge-counter"><?php echo $n;?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <?php 
                                    while ($row = mysqli_fetch_array($get_p)) {
                                        $date = $row['created_at'];
                                        $cusname = $row['fname'];
                                ?>
                                    <a class="dropdown-item d-flex align-items-center" href="pending.php">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fa-solid fa-bars-progress text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500"><?php echo $date;?></div>
                                            <span class="font-weight-bold"><?php echo $cusname;?> has a pending appointment</span>
                                        </div>
                                    </a>
                                <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="pending.php">Show All Pendings</a>
                            </div>
                        </li>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name;?></span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Accepted/Active Appointments</h1>
                        </div>
                        <!-- Content Row -->
                        <div class="row">
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Accepted/Active Appointments</div>
                                                    <?php 
                                                    $get_p = mysqli_query($conn, "SELECT * FROM appointments WHERE status = 'Accepted' ");
                                                    $n = mysqli_num_rows($get_p);
                                                    ?>
                                                <div class="h5 mb-0 font-weight-bold text-success-800"><?php echo $n;?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-clipboard-check fa-2x text-success-300" style="color: green;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- table for active appointments -->
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Accepted Appointments</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Delivery Option</th>
                                                <th>Promos Services</th>
                                                <th>Drop-Off Schedule</th>
                                                <th>Special Instructions</th>
                                                <th>Reference ID</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $get_pending = mysqli_query($conn, "SELECT * FROM appointments WHERE status='Accepted' ");
                                            while ($row = mysqli_fetch_array($get_pending)) {
                                                $id = $row['id'];
                                                $fn = $row['fname'];
                                                $ln = $row['lname'];
                                                $phone = $row['p_number'];
                                                $addrs = $row['address'];
                                                $email = $row['email'];
                                                $delivery_opt = $row['delivery_opt'];
                                                $drop_sched = $row['drop_schedule'];
                                                $pos = $row['pos'];
                                                $s_ins = $row['s_instruction'];
                                                $refid = $row['refid'];
                                                $stat = $row['status'];
                                                $ca = $row['created_at'];
                                                $cusname = $fn.' '.$ln;
                                                ?>
                                                <tr>
                                                    <td><?php echo $id; ?></td>
                                                    <td><?php echo $fn; ?></td>
                                                    <td><?php echo $ln; ?></td>
                                                    <td><?php echo $phone; ?></td>
                                                    <td><?php echo $addrs; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td><?php echo $delivery_opt; ?></td>
                                                    <td><?php echo $pos; ?></td>
                                                    <td><?php echo $drop_sched; ?></td>
                                                    <td><?php echo $s_ins; ?></td>
                                                    <td><?php echo $refid; ?></td>
                                                    <td><?php echo $stat; ?></td>
                                                    <td><?php echo $ca; ?></td>
                                                    
                                                    <td class="text-center">
                                                        <a class="link-dark m-1"  data-toggle="modal" data-target="#action_modal<?php echo $id; ?>" style = "cursor: pointer;"><i class="fa-solid fa-up-right-from-square"></i></a>
                                                        <!-- change status modal -->
                                                        <div class="modal fade" id="action_modal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Details <?php echo $id; ?></h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="adminprocess.php?id=<?php echo $id; ?>" method="post">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="First Name" value="<?php echo $cusname?>" name="fn" required readonly>
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <label class="input-group-text" for="inputGroupSelect01"><i class="fa-solid fa-info p-1"></i></label>
                                                                                <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                                    <option secelected value="Done">Done</option>
                                                                                </select>
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text"><i class="fa-solid fa-peso-sign"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Total Ammount" name="ammount" required>
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                                                                                <textarea class="form-control" id="#" rows="3" name="message">HI! Your Appointment on LDG LAUNDRYSHOP already done. With a refid <?php echo $refid?> </textarea>
                                                                        </div>
                                                                        <div class="d-grid">
                                                                            <input type="submit" class="btn btn-success" value="Continue" name="done">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->

        <!-- action modal -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

    </body>

</html>