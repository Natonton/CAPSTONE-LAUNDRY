<?php
    include 'conn.php';
    session_start();
    session_destroy();
?>

<script>
    alert("You've Logged Out");
    window.location.href="index.php";
</script>