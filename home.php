<?php
    include "conn.php";
   

   $e=$_SESSION['user1'];   

    $getname = mysqli_query($conn, "SELECT * FROM user WHERE user1='$e'");
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
    <title><?php echo $fname ."  ". $lname;?></title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
<div class="content">  
       <div class="image">
            <img src="img/3.jpg" width="45%" >
        </div>

</div class="show">
<?php

    $getpost = mysqli_query($conn, "SELECT * FROM user WHERE fname='$fname' AND lname='$lname'");
    while($row1=mysqli_fetch_array($getpost)){
        
        ?>

<h1 style="text-align:center; font-family:Georgia, 'Times New Roman', Times, serif; margin-top:20px; margin-left: 20px;"> 
WELCOME USER! <hr style= "width:40%"> </hr>
  <?php echo $row1['fname'];?>  <?php echo $row1['lname'];?></h1>
  <h1 style = "text-align:center;"> </h1>
  

    
<?php
    }

?>

</div>
<div class="log">
<form action="index.php">
      <button type="submit">LOGOUT</button>
    </form>
</div>
</div>



</body>
</head>