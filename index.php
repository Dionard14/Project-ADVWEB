

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    
</head>
<style>



</style>
<body>
 
    <div class="container">
    
    <div class ="box1">
  
 <form action="process.php" method="POST" >
 <h1>WELCOME BACK!</h1></p>
  <label>Username </label><br> 
  <input type="text" name="uname" required placeholder="Enter your username"><br> <br>

  <label>Password </label><br>     
  <input type="password" name="pass" id="myInput" required placeholder="*************************"><br> <br>
  <input type="checkbox" onclick="myFunction()">Show Password <br> <br>

  
  <input type="submit"  name="login" value="LOGIN"> <br> 
  <p>Not yet register? <a href="reg.php">Register here</a>.</p>
  </div>
<div class="box2">
  <img src="img/1.jpg" height="653px" width="830px">

</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>

</body>
</html>