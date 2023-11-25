<?php
    //sign-up
    include "conn.php";
    session_start();
    if(isset($_POST['reg'])){
        $fname=$_POST['fn'];
        $lname=$_POST['ln'];
        $pnumber=$_POST['pn'];
        $address=$_POST['adrs'];
        $email=$_POST['email'];
        $password=$_POST['pw'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email already exists in the database
        $check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        if(mysqli_num_rows($check_email) > 0){
            // Email already exists in the database
                ?>
                    <script>
                        alert("Email already exists");
                        window.location.href="index.php";
                    </script>
                <?php
        } 
        else {
            // Email does not exist in the database, insert new record
            $insert=mysqli_query($conn, "INSERT INTO users VALUES('0','$fname','$lname','$pnumber','$address','$email','$hashed_password')");
            if($insert==true){
                ?>
                    <script>
                        alert("Successfully Registered");
                        alert("PLEASE LOGIN");
                        window.location.href="index.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Error Signing Up");
                        alert("PLEASE TRY AGAIN LATER.");
                        window.location.href="index.php";
                    </script>
                <?php
            }
        }
    }

    //login
    if (isset($_POST['Login'])) {
        $email = $_POST['email'];
        $password = $_POST['pw'];
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $row = mysqli_fetch_assoc($check);
        $hash = $row['password'];
        if (password_verify($password, $hash)) {
            $_SESSION['email'] = $email;
            ?>
            <script>
                alert("Correct Username or Password");
                window.location.href="home.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Error Username or Password");
                window.location.href="index.php";
            </script>
            <?php
        }
    }

    // update profile
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $pn = $_POST['pn'];
        $addrs = $_POST['adrs'];        
        $cur_pass = $_POST['cur_pw']; // current password
        $new_pass = $_POST['new_pw']; // new password
    
        // check if current password is correct
        $check = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
        $row = mysqli_fetch_assoc($check);
        $hash = $row['password'];
        if (!password_verify($cur_pass, $hash)) {
            ?>
            <script>
                alert("Current password is incorrect");
                window.location.href="home.php";
            </script>
            <?php
        } else {
            // update user details and password (if new password was provided)
            if (!empty($new_pass)) {
                $pass = password_hash($new_pass, PASSWORD_DEFAULT);
                $udpatedetails = mysqli_query($conn,"UPDATE users SET fn='$fn', ln='$ln', phone='$pn', address='$addrs', password='$pass' WHERE id='$id'");
            } else {
                $udpatedetails = mysqli_query($conn,"UPDATE users SET fn='$fn', ln='$ln', phone='$pn', address='$addrs' WHERE id='$id'");
            }
    
            if($udpatedetails==TRUE){
                ?>
                    <script>
                        alert("Profile has been Successfully Updated");
                        window.location.href="home.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Error Updating, Please Try Again");
                        window.location.href="home.php";
                    </script>
                <?php
            }
        }
    }

    //appointments
    include "conn.php";
        if(isset($_POST['continue'])){
            $delivery_opt = $_POST['delivery_opt'];
            $fname=$_POST['fn'];
            $lname=$_POST['ln'];
            $pnumber=$_POST['pn'];
            $address=$_POST['adrs'];
            $email=$_POST['email'];
            $drop_sched = $_POST['sched_drop'];
            $pos = $_POST['pos_opt'];
            $s_instruction = $_POST['s_instruction'];
            $stat = "Pending";
            $timezone = "Asia/Manila";
            date_default_timezone_set($timezone);
            $current_datetime = date('Y-m-d H:i:s'); // Get current date and time in YYYY-MM-DD HH:MM:SS format
            $remarks = "---";
            $ammount = "---";
            $refid=" ";
            $insert = mysqli_query($conn, "INSERT INTO appointments VALUES('0', '$fname', '$lname', '$pnumber', '$address', '$email', '$delivery_opt', '$drop_sched', '$pos', '$s_instruction', '$stat', '$current_datetime', '$remarks', '$ammount', '$refid', '$current_datetime')");
            if($insert==true){
                ?>
                    <script>
                        alert("Appointment Sent");
                        window.location.href="home.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Error making appointment");
                        window.location.href="home.php";
                    </script>
                <?php
            }
        }
        include "conn.php";
        if(isset($_POST['continue_cancel'])){
            $id = $_GET['id'];
            $status = 'Cancel';
            $insert = mysqli_query($conn, "UPDATE appointments SET status='$status' WHERE id='$id'");
            if($insert==true){
                ?>
                    <script>
                        alert("Appointment has been Canceledd");
                        window.location.href="home.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Error");
                    </script>
                <?php
            }
        }
?>