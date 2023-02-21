<?php
include 'config.php';

error_reporting(0);

session_start();

$s = $_GET['email'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $user = $_POST['user'];
    $level = $_POST['level'];

    $sqli = "UPDATE user SET email='$email',username='$user' WHERE email='dananwirapratama@gmail.com';";
    $res = mysqli_query($conn, $sqli);
    if ($res) {
        header("location:admin-tab2-tokped.php");
    }else {
        echo'<script>alert("Oops something went wrong!"); window.location="admin-tab2-tokped.php"; </script>';
    }
}
