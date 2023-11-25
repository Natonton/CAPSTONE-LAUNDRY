<?php
    include "conn.php";
    session_start();
    //admin login
    if(isset($_POST['adminlogin'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $get_det_admin = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND  password = '$pass'");
        $num_admin = mysqli_num_rows($get_det_admin);
        if ($num_admin >= 1){
            $_SESSION['email']=$email;
            ?>
                <script>
                    alert("Welcome! <?php echo $email;?> " );
                    window.location.href="adminhome.php";
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert("Invalid Inputs" );
                    window.location.href="index.php";
                </script>
            <?php
        }
    }
    //admin login closing

    //update SDO
        include "conn.php";
        if(isset($_POST['update'])){
            // $id = $_GET['id'];
            $pk = $_POST['pk'];
            $mk = $_POST['mk'];
            $ek = $_POST['ek'];
            $inc = $_POST['inc'];
            $status = $_POST['status'];
            $udpateprice = mysqli_query($conn,"UPDATE pnp SET per_kilo='$pk', min_kilo='$mk', exd='$ek', inclusions='$inc', status='$status' ");
            if($udpateprice==TRUE){
                ?>
                    <script>
                        alert("Price has been Successfully Updated");
                        window.location.href="pnp.php";
                    </script>
                <?php
            }
            else{
                        ?>
                        <script>
                            alert("Error Updating, Please Try Again");
                            window.location.href="pnp.php";
                        </script>
                    <?php
            }
        }
    //closing update SDO

    //update Self Service
    include "conn.php";
    if(isset($_POST['update_ss'])){
        // $id = $_GET['id'];
        $pkilo = $_POST['pk_ss'];
        $mkilo = $_POST['mk_ss'];
        $ekilo = $_POST['ek_ss'];
        $inclu = $_POST['inc_ss'];
        $status = $_POST['status'];
        $udpateprice = mysqli_query($conn,"UPDATE ss SET per_kilo_ss='$pkilo', min_kilo_ss='$mkilo', exd_ss='$ekilo', inclusions_ss='$inclu', status = '$status' ");
        if($udpateprice==TRUE){
            ?>
                <script>
                    alert("Price has been Successfully Updated");
                    window.location.href="pnp.php";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Updating, Please Try Again");
                        window.location.href="ss.php";
                    </script>
                <?php
        }
    }
    //closing update Self Service

    // promo1
    include "conn.php";
    if(isset($_POST['update_p1'])){
        // $id = $_GET['id'];
        $pk_p1 = $_POST['pk_p1'];
        $mk_p1 = $_POST['mk_p1'];
        $ek_p1 = $_POST['ek_p1'];
        $inc_p1 = $_POST['inc_p1'];
        $status = $_POST['status'];
        $udpateprice = mysqli_query($conn,"UPDATE p1 SET per_kilo_p1='$pk_p1', min_kilo_p1='$mk_p1', exd_p1='$ek_p1', inclusions_p1='$inc_p1', status='$status' ");
        if($udpateprice==TRUE){
            ?>
                <script>
                    alert("Price has been Successfully Updated");
                    window.location.href="pnp.php";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Updating, Please Try Again");
                        window.location.href="pnp.php";
                    </script>
                <?php
        }
    }
    // end of promo1

    // promo2
    include "conn.php";
    if(isset($_POST['update_p2'])){
        // $id = $_GET['id'];
        $pk_p2 = $_POST['pk_p2'];
        $mk_p2 = $_POST['mk_p2'];
        $ek_p2 = $_POST['ek_p2'];
        $inc_p2 = $_POST['inc_p2'];
        $status = $_POST['status'];
        $udpateprice = mysqli_query($conn,"UPDATE p2 SET per_kilo_p2='$pk_p2', min_kilo_p2='$mk_p2', exd_p2='$ek_p2', inclusions_p2='$inc_p2', status = '$status' ");
        if($udpateprice==TRUE){
            ?>
                <script>
                    alert("Price has been Successfully Updated");
                    window.location.href="pnp.php";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Updating, Please Try Again");
                        window.location.href="pnp.php";
                    </script>
                <?php
        }
    }
    //end of promo2

    include "conn.php";
    if(isset($_POST['update_p3'])){
        // $id = $_GET['id'];
        $pk_p3 = $_POST['pk_p3'];
        $mk_p3 = $_POST['mk_p3'];
        $ek_p3 = $_POST['ek_p3'];
        $inc_p3 = $_POST['inc_p3'];
        $status = $_POST['status'];
        $udpateprice = mysqli_query($conn,"UPDATE p3 SET per_kilo_p3='$pk_p3', min_kilo_p3='$mk_p3', exd_p3='$ek_p3', inclusions_p3='$inc_p3', status = '$status' ");
        if($udpateprice==TRUE){
            ?>
                <script>
                    alert("Price has been Successfully Updated");
                    window.location.href="pnp.php";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Updating, Please Try Again");
                        window.location.href="pnp.php";
                    </script>
                <?php
        }
    }
    // end of promo1

    include "conn.php";
    if(isset($_POST['update_p4'])){
        // $id = $_GET['id'];
        $pk_p4 = $_POST['pk_p4'];
        $mk_p4 = $_POST['mk_p4'];
        $ek_p4 = $_POST['ek_p4'];
        $status = $_POST['status'];
        $inc_p4 = $_POST['inc_p4'];
        $udpateprice = mysqli_query($conn,"UPDATE p4 SET per_kilo_p4='$pk_p4', min_kilo_p4='$mk_p4', exd_p4='$ek_p4', inclusions_p4='$inc_p4', status='$status' ");
        if($udpateprice==TRUE){
            ?>
                <script>
                    alert("Price has been Successfully Updated");
                    window.location.href="pnp.php";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Updating, Please Try Again");
                        window.location.href="pnp.php";
                    </script>
                <?php
        }
    }

    //admin accept decline pending appointments
    include "conn.php";
    if(isset($_POST['continue_action'])){
        $id = $_GET['id'];
        $status_ap = $_POST['status'];
        $refid = uniqid();
        if(empty($_POST['reason'])){
            $reason= "---";
        }
        else{
            $reason = $_POST['reason'];
        }


        $update_status = mysqli_query($conn, "UPDATE appointments SET status = '$status_ap', remarks = '$reason', refid='$refid' WHERE id = '$id'");
        
        if($status_ap == 'Accepted'){ //butang diri and $status_ap =="Accepted"
            $msg = $_POST['message'];
            ?>
                <script>
                    window.location.href="sendSMS.php?id=<?php echo $id ?>&msg=<?php echo $msg ?>";
                </script>
            <?php
        } else {
            ?> 
            <script>   
            alert("status changed to declined");
            window.location.href="pending.php";
            </script>
            <?php
        }   
    }   
    //closing admin accept decline pending appointments

    //admin done accepted appointments
    include "conn.php";
    if(isset($_POST['done'])){
        $id = $_GET['id'];
        $status_ap = $_POST['status'];
        $ammount = $_POST['ammount'];
        $timezone = "Asia/Manila";
        date_default_timezone_set($timezone);
        $current_datetime = date('Y-m-d H:i:s'); // Get current date and time in YYYY-MM-DD HH:MM:SS format=
        $udpate_status = mysqli_query($conn,"UPDATE appointments SET status = '$status_ap', ammount = '$ammount', done_date ='$current_datetime' WHERE id= '$id' ");
        if($udpate_status==TRUE){
            $msg = $_POST['message'];
            ?>
                <script>
                    window.location.href="sendSMS.php?id=<?php echo $id ?>&msg=<?php echo $msg ?>";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Changing Status");
                        window.location.href="active.php";
                    </script>
                <?php
        }
    }
    //done accepted appointments

    //admin History appointments
    include "conn.php";
    if(isset($_POST['done'])){
        $id = $_GET['id'];
        $status_ap = $_POST['status'];
        $udpate_status = mysqli_query($conn,"UPDATE appointments SET status = '$status_ap' WHERE id= '$id' ");
        if($udpate_status==TRUE){
            ?>
                <script>
                    alert("Status Changed to Done!");
                    window.location.href="active.php";
                </script>
            <?php
        }
        else{
                    ?>
                    <script>
                        alert("Error Changing Status");
                        window.location.href="active.php";
                    </script>
                <?php
        }
    }
    //closing of history appointments

    //admin delete profile
    include "conn.php";
    if(isset($_POST['continue_delete'])){
        $id = $_GET['id'];
        $delete = mysqli_query($conn,"DELETE FROM users WHERE id = '$id'");
        if($delete){
            ?>
            <script>
                alert("Profile Deleted.");
                window.location.href="profiles.php";
            </script>
            <?php
        }
        else{
            echo "Failed" . mysqli_error($conn);
        }
    }
    //delete closing
    //admin delete walkin profile
    include "conn.php";
    if(isset($_POST['continue_delete_walkin'])){
        $id = $_GET['id'];
        $delete = mysqli_query($conn,"DELETE FROM walkin WHERE id = '$id'");
        if($delete){
            ?>
            <script>
                alert("Profile Deleted.");
                window.location.href="walkins.php";
            </script>
            <?php
        }
        else{
            echo "Failed" . mysqli_error($conn);
        }
    }
    //delete walkin closing

    //insert walkin
        include "conn.php";
        if(isset($_POST['submit-walkin'])){
            $fname=$_POST['fn'];
            $lname=$_POST['ln'];
            $phone=$_POST['pn'];
            $addrs=$_POST['ad'];
            $email=$_POST['email'];
            $insert = mysqli_query($conn, "INSERT INTO walkin VALUES('0', '$fname', '$lname', '$phone', '$addrs', '$email')");
            if($insert==true){
                ?>
                    <script>
                        alert("Insert Successfully");
                        window.location.href="walkins.php";
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
    //walkin closing
    // walkin appointments
    include "conn.php";
        if(isset($_POST['continue_walkin_appointment'])){
            $delivery_opt = $_POST['delivery_opt'];
            $fname=$_POST['fn'];
            $lname=$_POST['ln'];
            $pnumber=$_POST['pn'];
            $address=$_POST['ad'];
            $email=$_POST['email'];
            $drop_sched = "---";
            $pos = $_POST['pos_opt'];
            $s_instruction = "---";
            $stat = "Done";
            $ammount = $_POST['total_amount'];
            $refid = uniqid();
            $timezone = "Asia/Manila";
            date_default_timezone_set($timezone);
            $current_datetime = date('Y-m-d H:i:s'); // Get current date and time in YYYY-MM-DD HH:MM:SS format
            $remarks = "walkin";
            $insert = mysqli_query($conn, "INSERT INTO appointments VALUES('0', '$fname', '$lname', '$pnumber', '$address', '$email', '$delivery_opt', '$drop_sched', '$pos', '$s_instruction', '$stat', '$current_datetime', '$remarks', '$ammount','$refid','$current_datetime')");
            if($insert==true){
                ?>
                    <script>
                        alert("SUCCESS");
                        window.location.href="walkins.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Error making appointment");
                        window.location.href="walkins.php";
                    </script>
                <?php
            }
        }

    //edit walkin
    include "conn.php";
        if(isset($_POST['continue_Update'])){
            $id = $_GET['id'];
            $fname=$_POST['fn'];
            $lname=$_POST['ln'];
            $phone=$_POST['pn'];
            $addrs=$_POST['ad'];
            $email=$_POST['email'];
            $insert = mysqli_query($conn, "UPDATE walkin SET fn='$fname', ln='$lname', phone='$phone', address='$addrs', email='$email' WHERE id='$id'");
            if($insert==true){
                ?>
                    <script>
                        alert("Edit Successfully");
                        window.location.href="walkins.php";
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
    //closing edit walkin

    //sending sms
    if (isset($_GET['id'])) {
        # code...
    }
$service_plan_id = "YOUR_servicePlanId";
$bearer_token = "YOUR_API_token";

//Any phone number assigned to your API
$send_from = "YOUR_Sinch_virtual_number";
//May be several, separate with a comma ,
$recipient_phone_numbers = "recipient_phone_numbers"; 
$message = "Test message to {$recipient_phone_numbers} from {$send_from}";

// Check recipient_phone_numbers for multiple numbers and make it an array.
if(stristr($recipient_phone_numbers, ',')){
  $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
}else{
  $recipient_phone_numbers = [$recipient_phone_numbers];
}

// Set necessary fields to be JSON encoded
$content = [
  'to' => array_values($recipient_phone_numbers),
  'from' => $send_from,
  'body' => $message
];

$data = json_encode($content);

$ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo $result;
}
curl_close($ch);
?>