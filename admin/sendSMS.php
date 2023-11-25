<?php
//sending sms
include 'conn.php';

$id = $_GET['id'];
$msg = $_GET['msg'];

$email = mysqli_query($conn,"SELECT * FROM appointments where id='$id'");
$email = mysqli_fetch_object($email);
$email = $email->email;

$id = mysqli_query($conn,"SELECT * FROM users where email='$email'");
$id = mysqli_fetch_array($id);
$id = $id['id'];

$smsDetails = mysqli_query($conn,"SELECT * FROM sms where user_id='$id'");
while ($sms = mysqli_fetch_array($smsDetails)){
    $cno = $sms['cno'];
    $spi = $sms['spi'];
    $bt = $sms['bt'];
}

$service_plan_id = $spi;
$bearer_token = $bt;

//Any phone number assigned to your API
$send_from = $cno;
//May be several, separate with a comma ,
$recipient_phone_numbers = $cno; 
$message = $msg;

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
   // echo $result;
}
curl_close($ch);
?>
<script>
    alert("Appointment Successfully Updated!");
    window.location.href="active.php";
</script>
<?php