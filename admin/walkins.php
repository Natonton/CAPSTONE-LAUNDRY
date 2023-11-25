<?php
    session_start();
    include "conn.php";
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
        <title>Walk-ins Profiles</title>
        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <a class="collapse-item" href="pending.php">Pending Appointments</a>
                        <a class="collapse-item" href="active.php">Active Appointments</a>
                        <a class="collapse-item" href="history.php">History</a>
                    </div>
                </div>
            </li>

                <!-- Divider -->
                <hr class="sidebar-divider">


                <!-- Nav Item - Promos and Pricing -->
                <li class="nav-item">
                    <a class="nav-link" href="pnp.php">
                        <i class="fa-solid fa-tags"></i>
                        <span>Promos and Pricings</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-id-card"></i>
                    <span>Profiles</span>
                </a>
                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="walkins.php">Walk ins</a>
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
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

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
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name; ?></span>
                                        <img class="img-profile rounded-circle"
                                            src="img/undraw_profile.svg">
                                    </a>
                                    <!-- Dropdown - User Information -->
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

                        <!-- table for profiles -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Customers Profile</h6>
                                <a data-toggle="modal" data-target="#insertwalkin" style = "cursor: pointer;"  class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3 mr-2 mt-3"></i>Insert Walk in Client</a>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_walkins_info = mysqli_query($conn, "SELECT * FROM walkin");
                                        while ($row = mysqli_fetch_array($get_walkins_info)) {
                                            $id = $row['id'];
                                            $fn = $row['fn'];
                                            $ln = $row['ln'];
                                            $phone = $row['phone'];
                                            $addrs = $row['address']; 
                                            $email = $row['email'];
                                            // ari
                                            ?>
                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $fn; ?></td>
                                                <td><?php echo $ln; ?></td>
                                                <td><?php echo $phone; ?></td>
                                                <td><?php echo $addrs; ?></td>
                                                <td><?php echo $email; ?></td>
                                                
                                                <td class="text-center">
                                                    <a data-toggle="modal" data-target="#walkinappointment<?php echo $id; ?>" style = "cursor: pointer;"  class="link-dark"><i class="fa-solid fa-calendar-check fs-5 me-3 mr-2"></i></a>
                                                    <a data-toggle="modal" data-target="#editProfileModal<?php echo $id; ?>" style = "cursor: pointer;"  class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3 mr-2"></i></a>
                                                    <a data-toggle="modal" data-target="#deleteProfileModal<?php echo $id; ?>" style = "cursor: pointer;"  class="link-dark"><i class="fa-solid fa-trash fs-5 me-3 "></i></a>
                                                    <!-- delete profile modal -->
                                                    <div class="modal fade" id="deleteProfileModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete User Profile <?php echo $id; ?></h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="adminprocess.php?id=<?php echo $id; ?>" method="post">
                                                                    <div class="input-group mb-3">
                                                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="First Name" value="<?php echo $fn;?>" name="fn" required readonly>
                                                                        </div>
                                                                        <div class="d-grid">
                                                                            <input type="submit" class="btn btn-danger" value=" Confirm Delete" name="continue_delete_walkin">
                                                                            <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- closing delete profile  -->
                                                    <!-- edit walkin modal  -->
                                                        <div class="modal fade" id="editProfileModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update User Profile <?php echo $id; ?></h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="adminprocess.php?id=<?php echo $id; ?>" method="post">
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $fn;?>" name="fn" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $ln;?>" name="ln" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Phone Number" value="<?php echo $phone;?>" name="pn" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Address" value="<?php echo $addrs;?>" name="ad" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                <input type="email" class="form-control" placeholder="E" value="<?php echo $email;?>" name="email" required>
                                                                            </div>
                                                                            <div class="d-grid">
                                                                                <input type="submit" class="btn btn-success" value="Confirm Update" name="continue_Update">
                                                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                        <div class="modal-footer">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- closing edit walkin  -->
                                                    <!-- walkin appointment modal  -->
                                                    <div class="modal fade" id="walkinappointment<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">User Appointment <?php echo $id; ?></h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="adminprocess.php?id=<?php echo $id; ?>" method="post">
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $fn;?>" name="fn" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $ln;?>" name="ln" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Phone Number" value="<?php echo $phone;?>" name="pn" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Address" value="<?php echo $addrs;?>" name="ad" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                <input type="email" class="form-control" placeholder="E" value="<?php echo $email;?>" name="email" required>
                                                                            </div>
                                                                            <!--Input for Pos-->
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text" for="inputGroupSelect01"><i class="fa-solid fa-info p-1"></i></span>
                                                                                <select class="form-select" id="inputGroupSelect01" name="pos_opt" required>
                                                                                    <option value = "--- "selected>(Select Promos or Services)</option>
                                                                                    <option value="SDO">SDO (Shop Drop Off)</option>
                                                                                    <option value="SSS">SSS (Shop Self Service)</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <label class="input-group-text" for="inputGroupSelect01"><i class="fa-solid fa-info p-1"></i></label>
                                                                                <select class="form-select" id="delivery_opt" name="delivery_opt" required>
                                                                                    <option value="PickUp">Pick Up (at Shop)</option>
                                                                                    <option value="Door2Door">Deliver (Door to Door)</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"><i class="fa-solid fa-peso-sign"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Total Amount" name="total_amount" required>
                                                                            </div>
                                                                            <div class="d-grid">
                                                                            <p class="text-center lead text-warning"><u>Please double-check your inputs, as once accepted, they cannot be cancel.</u></p>
                                                                                <input type="submit" class="btn btn-success" value="Confirm Appointment" name="continue_walkin_appointment">
                                                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                        <div class="modal-footer">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- closing walkin appointment -->
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
                        <!-- walk in modal -->
                            <div class="modal fade" id="insertwalkin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Insert Client</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="adminprocess.php" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                        <input type="text" class="form-control" placeholder="First Name"  name="fn" required >
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name"  name="ln" required >
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                        <input type="text" class="form-control" placeholder="Phone Number"  name="pn" required >
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                                        <input type="text" class="form-control" placeholder="Address"  name="ad" required >
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                        <input type="email" class="form-control" placeholder="Email"  name="email" required >
                                                    </div>
                                                    <div class="d-grid">
                                                        <input type="submit" class="btn btn-success" value="Submit" name="submit-walkin">
                                                    </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end of walk in modal -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Appointments History</h6>
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
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>REMARKS</th>
                                            <th>REFERENCE ID</th>
                                            <th>AMMOUNT</th>
                                            <th>Receipt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_history = mysqli_query($conn, "SELECT * FROM appointments WHERE status='Done' AND remarks = 'Walkin' ");
                                        while ($row = mysqli_fetch_array($get_history)) {
                                            $id = $row['id'];
                                            $fn = $row['fname'];
                                            $ln = $row['lname'];
                                            $phone = $row['p_number'];
                                            $addrs = $row['address'];
                                            $email = $row['email'];
                                            $delivery_opt = $row['delivery_opt'];
                                            $pos = $row['pos'];
                                            $drop_sched = $row['drop_schedule'];
                                            $s_ins = $row['s_instruction'];
                                            $stat = $row['status'];
                                            $ca = $row['created_at'];
                                            $ammount = $row['ammount'];
                                            $remarks = $row['remarks'];
                                            $refid = $row['refid'];
                                            $ddate =$row['done_date'];
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
                                                <td><?php echo $stat; ?></td>
                                                <td><?php echo $ca; ?></td>
                                                <td><?php echo $remarks; ?></td>
                                                <td><?php echo $refid; ?></td>
                                                <td><?php echo $ammount; ?></td>
                                                <td class="">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#receiptModal<?php echo $id; ?>">
                                                                <i class="fas fa-info-circle"></i>
                                                            </button>
                                                            <div class="modal fade" id="receiptModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="receiptModal" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                                                                    <div class="modal-content shadow-lg p-3 mb-5 bg-body rounded">
                                                                        <div class="modal-header">
                                                                        <h5 class="modal-title" id="receiptModal">Appoinment Details</h5>
                                                                        
                                                                        </button>
                                                                        </div>
                                                                        <div class="modal-body ">
                                                                            <h2 class="text-center">LDG LAUNDRY</h2>
                                                                            <p class="text-center mb-5">Lloyd Dylan Gritan <br> Mandurriao, Iloilo, Iloilo City 5000</p>
                                                                            <p>Name: <?php echo $cusname;?></p>
                                                                            <p>Reference Number: <?php echo $refid;?></p>
                                                                            <p>Promos/Services: <?php echo $pos;?></p>
                                                                            <p>Date: <?php echo $ddate;?></p>
                                                                            <p>Amount: ₱<?php echo $ammount;?></p>
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
                            <span>Copyright &copy; Your Website 2020</span>
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
                        <a class="btn btn-primary" href="logout.php">Logout</a>
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
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
        <script>
            $('#dataTable').DataTable({
                columnDefs: [
                    { targets: [-1], orderable: false } // Disable sorting for the last column
                ]
            });
        </script>


    </body>

</html>