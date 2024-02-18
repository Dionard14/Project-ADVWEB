<?php

    include "conn.php";
    session_start();

//This code is for registration

    if(isset($_POST['reg'])){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $bday = $_POST['bday'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $user1 = $_POST['user1'];
        $pass1 = $_POST['pass1'];

       $insertusers = mysqli_query($conn, "INSERT INTO user VALUE('0', '$fname','$lname','$age','$address','$bday','$phone','$email','$user1','$pass1')");
 
        if ($insertusers == true){
        ?>
<script>
    alert("Your Registration is Succesful!");
    window.location.href="index.php";

</script>
<?php

    } else {
        ?>
        <script>
            alert("Error Registration\nTry Again!");
            window.location.href="reg.php";
        
        </script>
        <?php
    }
    }
//This is code for LOGIN

    if (isset($_POST['login'])){

        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
       
        $check = mysqli_query($conn, "SELECT * FROM user WHERE user1 = '$uname' AND pass1 = '$pass'");

        $num = mysqli_num_rows($check);

        if ($num >=1 ){
            $_SESSION['user1']=$uname;

?>
<script>
    alert("Account Accepted! Welcome User!");
    window.location.href="home.php";

</script>
<?php
        }else {
            ?>
            <script>
                alert("Username or Password nor Found!");
                window.location.href="index.php";
            
            </script>
            <?php

        }
        }
         

?>