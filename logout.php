<?php
session_start();
error_reporting(0);
include ('link/conn.php');
if (isset($_SESSION['loginid'])) {
    $username = $_SESSION['loginid'];
    $currentTime = date('Y-m-d H:i:s');

    // Update status to offline
    $updateQuery = "UPDATE `login` SET  `status` = 'Offline', `LastSeen`='$currentTime' WHERE `Id` = '$username'";
    $conn->query($updateQuery);
    
    session_unset();
    session_destroy();
    header('location:index.php');
}

?>