<?php

include('conn.php');

if (isset($_POST['profile'])) {

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $insert = mysqli_query($conn, "INSERT INTO profiles1 VALUE('0', '$uname', '$pass')");
    if($insert == true){
        header("Location:about.php");
    }
        }

?>
