<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "tokopedia";

    $conn = mysqli_connect($host, $username, $pass, $dbname);

    if (!$conn){
        die("<script>alert('Gagal tersambung dengan database')");
    }
?>