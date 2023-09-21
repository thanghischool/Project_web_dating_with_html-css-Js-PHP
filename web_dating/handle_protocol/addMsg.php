<?php
session_start();
require_once("../connect.php");
$msg = $_GET["msg"];
$email = $_SESSION["email"];
$username = $_SESSION["username"];

$q = "SELECT * FROM `users` WHERE email ='$email'";
if ($rq = mysqli_query($conn, $q)) {
    if (mysqli_num_rows($rq) == 1) {

        $q = "INSERT INTO `msg`(`username`, `msg`) VALUES ('$username','$msg')";
        $rq = mysqli_query($conn, $q);
    }
}