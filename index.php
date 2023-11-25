<?php
    include "conn.php";
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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LAUNDRY</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <style>
            #nav a{
                color: black;
            }
            #nav .nav-item a:hover{
                color: white;
                border-radius: 5px;
            }
            #nav .nav-item .active{
                color: white;  
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="nav" >
            <div class="container px-5">
                <a class="navbar-brand"> <span class="fw-bolder">LDG</span> Laundry Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="text-transform: uppercase;">
                        <li class="nav-item mx-2"><a class="nav-link active" aria-current="page" href="#header"><i class="fa-solid fa-house" style="margin-right: 7px; font-size: 20px;"></i>Home</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="#ratenservices"><i class="fa-solid fa-coins" style="margin-right: 7px; font-size: 20px;"></i>Rate & Services</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="#locate-us"><i class="fa-solid fa-location-dot" style="margin-right: 7px; font-size: 20px;"></i>Locate Us</a></li>
                        <li class="nav-item mx-2" data-bs-toggle="modal" data-bs-target="#sign-upModal" style="cursor: pointer;"><a class="nav-link"><i class="fa-solid fa-pen" style="margin-right: 7px; font-size: 20px;"></i>Sign Up</a></li>
                        <li class="nav-item mx-2" data-bs-toggle="modal" data-bs-target="#login-modal" style="cursor: pointer;"><a class="nav-link"><i class="fa-solid fa-right-to-bracket" style="margin-right: 7px; font-size: 20px;"></i>Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sign up Modal -->
        <div class="modal fade" id="sign-upModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container text-dark">
                            <div class="row mt-5">
                                <div class=" bg-white m-auto wrapper" >
                                    <h2 class="text-center pt-3 mb-3">SIGNUP NOW</h2>
                                    <p class="text-center text-muted lead">It's free and Takes a Minute</p>
                                    <!--Form Start-->
                                    <form action="process.php" method="post">
                                        <!--Input for First Name-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="First Name" name="fn" required>
                                        </div>
                                        <!--Input for Last Name-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Last Name" name="ln" required>
                                        </div>
                                        <!--Input for Phone Number-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                            <input type="tel" class="form-control" placeholder="Phone Number" name="pn" required>
                                        </div><!--Input for Address-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                            <input type="text" class="form-control" placeholder="Complete Address" name="adrs" required>
                                        </div>
                                        <!--Input for Email-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                        <!--Input for Password-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password" value="" class="input form-control" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pw" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" onclick="password_show_hide();">
                                                    <i class="fas fa-eye p-1" id="show_eye"></i>
                                                    <i class="fas fa-eye-slash p-1 d-none" id="hide_eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--Input for Confirm Password-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Confirm Password" value="" class="input form-control" id="c-password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" onclick="c_password_show_hide();">
                                                    <i class="fas fa-eye p-1" id="c_show_eye"></i>
                                                    <i class="fas fa-eye-slash p-1 d-none" id="c_hide_eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--Sign Up Button-->
                                        <div class="d-grid">
                                            <input type="submit" class="btn btn-success" value="Signup" name="reg" onclick="return validate_match_password()">
                                            <p class="text-center text-muted">
                                                When You Register by Clicking Signup Button, You Agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                                            </p>
                                        </div>
                                        <p class="text-center">
                                            Already Have an Account? <a class="pe-auto" data-bs-toggle="modal" data-bs-target="#login-modal" style="cursor: pointer;">Login Here</a>
                                        </p>
                                    </form>
                                    <!--Form Close-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sign up Modal -->

        <!-- Login Modal -->
        <div class="modal fade" id="login-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container text-dark">
                            <div class="row mt-5">
                                <div class=" bg-white m-auto wrapper" >
                                    <h2 class="text-center pt-3 mb-3">PLEASE LOGIN</h2>
                                    <form action="process.php" method="POST">
                                        <!--Input For Email-->
                                        <div class="input-group mb-3 mt-5">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                        <!--Input For Password-->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password" value="" class="input form-control" id="lpassword" name="pw" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" onclick="login_password_show_hide();">
                                                    <i class="fas fa-eye p-1" id="lshow_eye"></i>
                                                    <i class="fas fa-eye-slash p-1 d-none" id="lhide_eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-grid mb-3">
                                            <input type="submit" class="btn btn-success" value="Login" name="Login">
                                        </div>
                                        <p class="text-center">
                                            Don't Have an Account Yet? <a class="pe-auto" data-bs-toggle="modal" data-bs-target="#sign-upModal" style="cursor: pointer;">Register Here</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of login Modal -->

        <!-- Header-->
        <header class="py-5" style = "background-color:#BAD7E9;" id="header">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder mb-2" >LDG LAUNDRY</h1>
                            <p class="lead text-muted-50 mb-4">"Transform Your Laundry Routine with the Swipe of a Finger"</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" data-bs-toggle="modal" data-bs-target="#sign-upModal" style="cursor: pointer;">Get Started</a>
                                <a class="btn btn-outline-dark btn-lg px-4" data-bs-toggle="modal" data-bs-target="#learnhowModal">Learn How</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Learn how modal -->
        <div class="modal fade" id="learnhowModal" tabindex="-1" aria-labelledby="learnhowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="learnhowModalLabel">Step-by-Step Instructions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ol>
                <li>Sign up for an account or log in to your existing account.</li>
                <li>Check rate and services.</li>
                <li>Check the booking calendar before you set an appointment</li>
                <li>Choose desired services and desired date of drop off/delivery</li>
                <li>Select any additional services or special instructions you may require.</li>
                <li>On the day of your reservation, drop off your laundry at the specified time.</li>
                <li>Pick up your clean and folded laundry on the designated pick-up/delivery day and time.</li>
                <li>Enjoy your freshly cleaned laundry!</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- standard pricing section-->
        <section class="bg-light py-5" id="ratenservices">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder"><i class="fas fa-tags text-success me-3"></i>Fresh clothes, fair prices</h2>
                    <p class="lead mb-5">With our no hassle pricing plans</p>
                    <h2 class="fw-bolder mt-5">STANDARD PRICINGS!</h2>
                </div>
                <div class="row justify-content-center">
                    <!-- Pricing card 1-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0 shadow-lg">
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
                                        <i class="text-primary"></i>
                                        <strong>INCLUSIONS</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <?php echo $inc;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card shop self service-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0 shadow-lg">
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
                                        <i class="text-primary"></i>
                                        <strong>INCLUSIONS</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <?php echo $inclu;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- promos section -->
        <section class="bg-light py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mt-5">PROMOS!</h2>
                </div>
                <div class="row justify-content-center">
                    <!-- Start of p1 card-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0 shadow-lg">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">#1</div><br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $p1status;?></div>
                                <div>
                                    <span class="display-4 fw-bold">₱<?php echo $pk_p1; ?></span>
                                    <span class="text-muted">/ kl.</span>
                                </div>
                                <span class="text-muted">Minimum of <?php echo $mk_p1; ?> kilo.<br>add ₱<?php echo $ek_p1; ?> per exceeding kilo.</span>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <strong>INCLUSIONS</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <?php echo $inc_p1;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end p1 card -->
                    <!-- start p2 card -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0 shadow-lg">
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
                                        <i class="text-primary"></i>
                                        <strong>INCLUSIONS</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <?php echo $inc_p2;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end p2 card  -->
                    <!-- start p3 card -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0 shadow-lg">
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
                                        <i class="text-primary"></i>
                                        <strong>INCLUSIONS</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <?php echo $inc_p3;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end p3 card  -->
                    <!-- start p4 card -->
                    <div class="col-lg-6 col-xl-4 mt-5">
                        <div class="card mb-5 mb-xl-0 shadow-lg">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">#4</div><br>
                                                <div class="small text-uppercase fw-bold text-muted">AVAILABILITY: <?php echo $p4status;?></div>
                                <div>
                                    <span class="display-4 fw-bold">₱<?php echo $pk_p4; ?></span>
                                    <span class="text-muted">/ kl.</span>
                                </div>
                                <span class="text-muted">Minimum of <?php echo $mk_p4; ?> kilo.<br>add ₱<?php echo $ek_p4; ?> per exceeding kilo.</span>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <strong>INCLUSIONS</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="text-primary"></i>
                                        <?php echo $inc_p4;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end p4 card  -->
                </div>
            </div>
        </section>
        <hr id="locate-us">
        
        <!-- Map section-->
        <section class="bg-light py-5 border-bottom" >
            <h2 class=" fw-bolder text-black mb-5 text-center fw-bolder"><i class="fa-solid fa-location-dot" style="color: red; font-size: 50px; margin-right: 20px;"></i>Find Us Here</h2>
            <div class="container px-5" style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.171437585132!2d122.53930651744386!3d10.721256899999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5e5fef80a5d%3A0x573f60c3aab5fbaa!2sYuna%20Laundry!5e0!3m2!1sen!2sph!4v1675593777069!5m2!1sen!2sph" width="100%" height="100%" style="border:0; position:absolute; top:0; left: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
        //Script for Show-Hide Password
            function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") 
            {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } 
            else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
            //Script for Show-Hide Confirm Password
            function c_password_show_hide() {
                var x = document.getElementById("c-password");
                var show_eye = document.getElementById("c_show_eye");
                var hide_eye = document.getElementById("c_hide_eye");
                hide_eye.classList.remove("d-none");
                if (x.type === "password") 
                {
                    x.type = "text";
                    show_eye.style.display = "none";
                    hide_eye.style.display = "block";
                } 
                else {
                    x.type = "password";
                    show_eye.style.display = "block";
                    hide_eye.style.display = "none";
                }
            }  
            //Script for Validating if Password and Confirm Password Matched
            function validate_match_password(){
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("c-password").value;
                if (password != confirmPassword){
                    alert("Passwords Don't Match! Please Try Again");
                    return false;
                }
                else{
                    return true;
                }
            }
            //Script for login Show-Hide Password
            function login_password_show_hide() {
            var x = document.getElementById("lpassword");
            var show_eye = document.getElementById("lshow_eye");
            var hide_eye = document.getElementById("lhide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") 
            {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } 
            else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
        </script>
    </body>
</html>