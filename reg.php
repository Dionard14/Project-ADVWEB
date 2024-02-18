
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" href="2.css">
</head>
<body>
    
<form action="process.php" method="POST">
  <div class="container">
    <div class="box1">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    
    <label for="fname">Firstname: </label> <br>
    <input type="text" placeholder="Enter first name here" name="fname" required> <br>

    <label for="lname">Lastname: </label> <br>
    <input type="text" placeholder="Enter last name here" name="lname" required> <br>

    <label for="age">Age: </label> <br>
    <input type="number" placeholder="Enter age here" name="age" min="0" max="255" class="no-arrow" required> <br>

    <label for="address">Address: </label> <br>
    <input type="text" placeholder="Enter address here" name="address" required> <br> 

    <label for="bday">Date of birth: </label> <br>
     <input type="date" name="bday" required> <br>
     
     <label for="phone">Cellphone number: </label> <br>
     <input type="tel" placeholder="Enter number here" name="phone" class="no-arrow" required> <br>

    <label for="email">Email: </label> <br>
    <input type="text" placeholder="Enter email here" name="email" required> <br>

    <label for="user1">Username: </label><br>
    <input type="text" name="user1" required placeholder="Enter your username here"><br>

    <label for="pass1">Password: </label> <br>
    <input type="password" placeholder="Enter password here" name="pass1" required> <br> <br> 

    <input type="submit" name="reg" value="REGISTER">

  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
  </div>
  <div class ="box2">
  <img src="img/download.jpg" height="1000px" width="830px">
  </div>
 
</form>



</body>
</html>