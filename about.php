<?php
    include "conn.php";

   
   $e=$_SESSION['user1'];   

    $getname = mysqli_query($conn, "SELECT * FROM profiles WHERE user1='$e'");
    while($row=mysqli_fetch_object($getname)){

        $fname= $row -> fname;
        $lname= $row -> lname;
        
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fname." ". $lname;?></title>
    <link rel="stylesheet" href="mystyle3.css">
</head>
<body>
    
        <a href="about.php">HOME</a>
        <a href="gallery.php">GALLERY</a>
        <button><a href="index.php">LOGOUT</a></button>

</body>
</head>