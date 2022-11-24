<?php
session_start();
include('includes/config.php');
error_reporting(0);
try {
    $sql = "INSERT INTO `payment`(`payment_id`, `payment_status`, `payment_request_id`, `user_id`, `vehicle_id`, `booking_id`, `payment_method`) VALUES (" . $_REQUEST["payment_id"] . "," . $_REQUEST["payment_status"] . "," . $_REQUEST["payment_request_id"] . "," . $_SESSION['user'][0]->id . "," . $_GET['vehicle_id'] . "," . $_GET['booking_id'] . ",)";
    $dbh->exec($sql);
    header('location:http://localhost/carrental/my-booking.php');
} catch (PDOException $e) {
    throw $e->getMessage();
}

