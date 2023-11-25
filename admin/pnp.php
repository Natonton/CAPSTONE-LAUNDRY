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

    $get_pnp = mysqli_query($conn, "SELECT * FROM pnp");
    while($row = mysqli_fetch_object($get_pnp)){
        $pk = $row -> per_kilo;
        $mk = $row -> min_kilo;
        $ek = $row -> exd;
        $pnpstatus = $row -> status;
        $inc = $row -> inclusions;
    }

    $get_ss = mysqli_query($conn, "SELECT * FROM ss");
    while($row = mysqli_fetch_object($get_ss)){
        $pkilo = $row -> per_kilo_ss;
        $mkilo = $row -> min_kilo_ss;
        $ekilo = $row -> exd_ss;
        $ssstatus = $row -> status;
        $inclu = $row -> inclusions_ss;
    }
    $get_p1 = mysqli_query($conn, "SELECT * FROM p1");
    while($row = mysqli_fetch_object($get_p1)){
        $pk_p1 = $row -> per_kilo_p1;
        $mk_p1 = $row -> min_kilo_p1;
        $ek_p1 = $row -> exd_p1;
        $p1status = $row -> status;
        $inc_p1 = $row -> inclusions_p1;
    }

    $get_p2 = mysqli_query($conn, "SELECT * FROM p2");
    while($row = mysqli_fetch_object($get_p2)){
        $pk_p2 = $row -> per_kilo_p2;
        $mk_p2 = $row -> min_kilo_p2;
        $ek_p2 = $row -> exd_p2;
        $p2status = $row -> status;
        $inc_p2 = $row -> inclusions_p2;
    }

    $get_p3 = mysqli_query($conn, "SELECT * FROM p3");
    while($row = mysqli_fetch_object($get_p3)){
        $pk_p3 = $row -> per_kilo_p3;
        $mk_p3 = $row -> min_kilo_p3;
        $ek_p3 = $row -> exd_p3;
        $p3status = $row -> status;
        $inc_p3 = $row -> inclusions_p3;
    }

    $get_p4 = mysqli_query($conn, "SELECT * FROM p4");
    while($row = mysqli_fetch_object($get_p4)){
        $pk_p4 = $row -> per_kilo_p4;
        $mk_p4 = $row -> min_kilo_p4;
        $ek_p4 = $row -> exd_p4;
        $p4status = $row -> status;
        $inc_p4 = $row -> inclusions_p4;
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
        <title>Admin  - Promos and Pricing</title>
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
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item" href="pending.php">Pending Appointments</a>
                            <a class="collapse-item" href="active.php">Active Appointments</a>
                            <a class="collapse-item" href="history.php">History</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                

                <!-- Nav Item - Promos and Pricing -->
                <li class="nav-item active">
                        <a class="nav-link" href="#">
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
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between my-4">
                                <h1 class="h3 mb-0 text-gray-800">PROMOS AND PRICING</h1>
                            </div>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            
                            <li class="nav-item dropdown no-arrow">
                                
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name;?></span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
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

                            <!-- standard pricing section -->
                            <section class="bg-light py-5 bg-white shadow-lg p-3 mb-5 bg-white rounded" id="ratenservices">
                                <div class="container px-5 my-5">
                                    <div class="text-center mb-5">
                                        <h2 class="fw-bold"><i class="fas fa-tags" style="color: rgb(17, 169, 17); font-size: 50px; margin-right: 20px;"></i>Fresh clothes, fair prices</h2>
                                        <p class="lead mb-5">With our no hassle pricing plans</p>
                                        <h2 class="fw-bold mt-5">STANDARD PRICING!</h2>
                                    </div>
                                    <div class="row gx-5 justify-content-center">
                                        <!-- Pricing card 1-->
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-5 mb-xl-0">
                                                <div class="card-body p-5">
                                                <div class="small text-uppercase fw-bold text-muted">SHOP DROP OFF</div><br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $pnpstatus;?></div>
                                                <div>
                                                    <span class="display-4 fw-bold">₱<?php echo $pk; ?></span>
                                                    <span class="text-muted">/ kl.</span>
                                                </div>
                                                <span class="text-muted">Minimum of <?php echo $mk; ?> kilo.<br>add ₱<?php echo $ek; ?> per exceeding kilo.</span>
                                                <ul class="list-unstyled mb-4 mt-3">
                                                    <li class="mb-2">
                                                    <i class="bi bi-check text-primary"></i>
                                                    <strong>INCLUSIONS</strong>
                                                    </li>
                                                    <li class="mb-2">
                                                    <i class="bi bi-check text-primary"></i>
                                                    <?php echo $inc;?>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editSDO">EDIT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit SDO Modal-->
                                            <div class="modal fade" id="editSDO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">EDIT SHOP DROP OFF</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="adminprocess.php" method="post">
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">PER KILO PRICING</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $pk?>" name="pk" required>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">MIN KILO</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $mk?>" name="mk" required>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">EXCEEDING KILO</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $ek?>" name="ek" required>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">INCLUSIONS</span>
                                                                    </div>
                                                                    <textarea class="form-control" id="#" rows="5" placeholder="Seperate each inclusion with comma." name="inc"></textarea>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <span class="input-group-text" id="addon-wrapping">AVAILABILITY</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                            <option secelected value="Available">Available</option>
                                                                            <option secelected value="Unavailable">Unavailable</option>
                                                                        </select>
                                                                </div>  
                                                                <div class="d-grid">
                                                                    <input type="submit" class="btn btn-success" value="UPDATE" name="update">
                                                                </div>                                                                                    
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- end of update price modal -->

                                        <!-- Edit Self Service Modal-->
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-5 mb-xl-0">
                                                <div class="card-body p-5">
                                                <div class="small text-uppercase fw-bold text-muted">SHOP SELF SERVICE</div><br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $ssstatus;?></div>
                                                <div>
                                                    <span class="display-4 fw-bold">₱<?php echo $pkilo; ?></span>
                                                    <span class="text-muted">/ kl.</span>
                                                </div>
                                                <span class="text-muted">Minimum of <?php echo $mkilo; ?> kilo.<br>add ₱<?php echo $ekilo; ?> per exceeding kilo.</span>
                                                <ul class="list-unstyled mb-4 mt-3">
                                                    <li class="mb-2">
                                                    <i class="bi bi-check text-primary"></i>
                                                    <strong>INCLUSIONS</strong>
                                                    </li>
                                                    <li class="mb-2">
                                                    <i class="bi bi-check text-primary"></i>
                                                    <?php echo $inclu;?>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_ss">EDIT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Self Service Modal-->
                                            <div class="modal fade" id="edit_ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">EDIT SELF SERVICE</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="adminprocess.php" method="post">
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">PER KILO PRICING</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $pkilo?>" name="pk_ss" required>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">MIN KILO</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $mkilo?>" name="mk_ss" required>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">EXCEEDING KILO</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $ekilo?>" name="ek_ss" required>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="addon-wrapping">INCLUSIONS</span>
                                                                    </div>
                                                                    <textarea class="form-control" id="#" rows="5" placeholder="Seperate each inclusion with comma." name="inc_ss"></textarea>
                                                                </div>
                                                                <div class="input-group flex-nowrap mb-3">
                                                                    <span class="input-group-text" id="addon-wrapping">AVAILABILITY</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                            <option secelected value="Available">Available</option>
                                                                            <option secelected value="Unavailable">Unavailable</option>
                                                                        </select>
                                                                </div>
                                                                <div class="d-grid">
                                                                    <input type="submit" class="btn btn-success" value="UPDATE" name="update_ss">
                                                                </div>                                                                                      
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </section>


                            <!-- start of promos -->

                            <section class="bg-light py-5 bg-white shadow-lg p-3 mb-5 mt-5 bg-white rounded" id="ratenservices">
                                <div class="container px-5 my-5">
                                    <div class="text-center mb-5">
                                        <h2 class="fw-bold mt-5">PROMOS!</h2>
                                    </div>
                                    <div class="row gx-5 justify-content-center">
                                        <!-- Start of p1 card-->
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-5 mb-xl-0">
                                                <div class="card-body p-5">
                                                    <div class="small text-uppercase fw-bold text-muted">#1</div>
                                                    <br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $p1status;?></div>
                                                    <div>
                                                        <span class="display-4 fw-bold">₱<?php echo $pk_p1; ?></span>
                                                        <span class="text-muted">/ kl.</span>
                                                    </div>
                                                    <span class="text-muted">Minimum of <?php echo $mk_p1; ?> kilo.<br>add ₱<?php echo $ek_p1; ?> per exceeding kilo.</span>
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="mb-2">
                                                        <i class="bi bi-check text-primary"></i>
                                                        <strong>INCLUSIONS</strong>
                                                        </li>
                                                        <li class="mb-2">
                                                        <i class="bi bi-check text-primary"></i>
                                                        <?php echo $inc_p1;?>
                                                        </li>
                                                    </ul>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_p1">EDIT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit p1 Modal-->
                                        <div class="modal fade" id="edit_p1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">EDIT PROMO #1</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="adminprocess.php" method="post">
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">PER KILO PRICING</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $pk_p1?>" name="pk_p1" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">MIN KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $mk_p1?>" name="mk_p1" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">EXCEEDING KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $ek_p1?>" name="ek_p1" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping" >INCLUSIONS</span>
                                                                </div>
                                                                <textarea class="form-control" id="#" rows="5" placeholder="Seperate each inclusion with comma." name="inc_p1"></textarea>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                    <span class="input-group-text" id="addon-wrapping">AVAILABILITY</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                            <option secelected value="Available">Available</option>
                                                                            <option secelected value="Unavailable">Unavailable</option>
                                                                        </select>
                                                                </div>
                                                            <div class="d-grid">
                                                                <input type="submit" class="btn btn-success" value="UPDATE" name="update_p1">
                                                            </div>                                                                                      
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of update p1 modal -->

                                        <!-- Start of p2 card-->
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-5 mb-xl-0">
                                                <div class="card-body p-5">
                                                    <div class="small text-uppercase fw-bold text-muted">#2</div><br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $p2status;?></div>
                                                    <div>
                                                        <span class="display-4 fw-bold">₱<?php echo $pk_p2; ?></span>
                                                        <span class="text-muted">/ kl.</span>
                                                    </div>
                                                    <span class="text-muted">Minimum of <?php echo $mk_p2; ?> kilo.<br>add ₱<?php echo $ek_p2; ?> per exceeding kilo.</span>
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="mb-2">
                                                            <i class="bi bi-check text-primary"></i>
                                                            <strong>INCLUSIONS</strong>
                                                        </li>
                                                            <li class="mb-2">
                                                            <i class="bi bi-check text-primary"></i>
                                                            <?php echo $inc_p2;?>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_p2">EDIT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit p2 Modal-->
                                        <div class="modal fade" id="edit_p2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">EDIT PROMO #2</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="adminprocess.php" method="post">
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">PER KILO PRICING</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $pk_p2?>" name="pk_p2" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">MIN KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $mk_p2?>" name="mk_p2" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">EXCEEDING KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $ek_p2?>" name="ek_p2" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">INCLUSIONS</span>
                                                                </div>
                                                                <textarea class="form-control" id="#" rows="5" placeholder="Seperate each inclusion with comma." name="inc_p2"></textarea>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                    <span class="input-group-text" id="addon-wrapping">AVAILABILITY</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                            <option secelected value="Available">Available</option>
                                                                            <option secelected value="Unavailable">Unavailable</option>
                                                                        </select>
                                                                </div>
                                                            <div class="d-grid">
                                                                <input type="submit" class="btn btn-success" value="UPDATE" name="update_p2">
                                                            </div>                                                                                      
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end of edit p2 modal -->
                                        <!-- start p3 card -->
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-5 mb-xl-0">
                                                <div class="card-body p-5">
                                                    <div class="small text-uppercase fw-bold text-muted">#3</div><br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $p3status;?></div>
                                                    <div>
                                                        <span class="display-4 fw-bold">₱<?php echo $pk_p3; ?></span>
                                                        <span class="text-muted">/ kl.</span>
                                                    </div>
                                                    <span class="text-muted">Minimum of <?php echo $mk_p3; ?> kilo.<br>add ₱<?php echo $ek_p3; ?> per exceeding kilo.</span>
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="mb-2">
                                                            <i class="bi bi-check text-primary"></i>
                                                            <strong>INCLUSIONS</strong>
                                                        </li>
                                                        <li class="mb-2">
                                                            <i class="bi bi-check text-primary"></i>
                                                            <?php echo $inc_p3;?>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_p3">EDIT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit p3 Modal-->
                                        <div class="modal fade" id="edit_p3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">EDIT PROMO #3</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="adminprocess.php" method="post">
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">PER KILO PRICING</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $pk_p3?>" name="pk_p3" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">MIN KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $mk_p3?>" name="mk_p3" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">EXCEEDING KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $ek_p3?>" name="ek_p3" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">INCLUSIONS</span>
                                                                </div>
                                                                <textarea class="form-control" id="#" rows="5" placeholder="Seperate each inclusion with comma." name="inc_p3"></textarea>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                    <span class="input-group-text" id="addon-wrapping">AVAILABILITY</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                            <option secelected value="Available">Available</option>
                                                                            <option secelected value="Unavailable">Unavailable</option>
                                                                        </select>
                                                                </div>
                                                            <div class="d-grid">
                                                                <input type="submit" class="btn btn-success" value="UPDATE" name="update_p3">
                                                            </div>                                                                                      
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of update p3 modal -->

                                        <!-- Start of p4 Modal-->
                                        <div class="col-lg-6 col-xl-4 mt-5">
                                            <div class="card mb-5 mb-xl-0">
                                                <div class="card-body p-5">
                                                    <div class="small text-uppercase fw-bold text-muted">#4</div>
                                                    <br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $p4status;?></div>
                                                    <div>
                                                        <span class="display-4 fw-bold">₱<?php echo $pk_p4; ?></span>
                                                        <span class="text-muted">/ kl.</span>
                                                    </div>
                                                    <span class="text-muted">Minimum of <?php echo $mk_p4; ?> kilo.<br>add ₱<?php echo $ek_p4; ?> per exceeding kilo.</span>
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="mb-2">
                                                            <i class="bi bi-check text-primary"></i>
                                                            <strong>INCLUSIONS</strong>
                                                        </li>
                                                        <li class="mb-2">
                                                            <i class="bi bi-check text-primary"></i>
                                                            <?php echo $inc_p4;?>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_p4">EDIT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit p4 Modal-->
                                        <div class="modal fade" id="edit_p4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">EDIT PROMO #4</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="adminprocess.php" method="post">
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">PER KILO PRICING</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $pk_p4?>" name="pk_p4" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">MIN KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $mk_p4?>" name="mk_p4" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">EXCEEDING KILO</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-describedby="addon-wrapping" value="<?php echo $ek_p4?>" name="ek_p4" required>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="addon-wrapping">INCLUSIONS</span>
                                                                </div>
                                                                <textarea class="form-control" id="#" rows="5" placeholder="Seperate each inclusion with comma." name="inc_p4"></textarea>
                                                            </div>
                                                            <div class="input-group flex-nowrap mb-3">
                                                                    <span class="input-group-text" id="addon-wrapping">AVAILABILITY</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                                                                            <option secelected value="Available">Available</option>
                                                                            <option secelected value="Unavailable">Unavailable</option>
                                                                        </select>
                                                                </div>
                                                            <div class="d-grid">
                                                                <input type="submit" class="btn btn-success" value="UPDATE" name="update_p4">
                                                            </div>                                                                                      
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  <!--end row -->
                                </div> <!--end container -->
                            </section>
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