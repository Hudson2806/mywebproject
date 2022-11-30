<?php

$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "my project"; 

$username="" ;$email=""; $pwd=""; $pwd1="";$errText="";

 // Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"])){
    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["username"])){
        if(!empty($_POST["email"])){
            if(!empty($_POST["password"])){
                if(!empty($_POST["password1"])){
        
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $pwd = $_POST["password"];
                    $pwd1 = $_POST["password1"];

                 if($pwd == $pwd1){
                    $query = "select Email_id from user_details where Email_id = '$email' ";
                    $result = mysqli_query($conn,$query);

                    if($result){
                        if(mysqli_num_rows($result) == 0){
                            $query1 ="select User_Name from user_details where User_Name = '$username'";
                            $result1 = mysqli_query($conn,$query1);

                            if($result1){
                                if(mysqli_num_rows($result1) == 0){
                                    $query2 = "insert into user_details(User_Name,Email_id,Password) values ('$username','$email','$pwd')";
                                    $result2 = mysqli_query($conn,$query2);
        
                                    if($result2){
                                        setcookie("username",$username,time()+(86400*100),"/");
                header("Location:profile.php");
                mysqli_close($conn);
                                    }
                                    else{
                                        echo("Error description: " . mysqli_error($con));
                                    }
                                }
                                else{
                                    $errText = "Username already exists";
                                }
                            }
                        }
                        else{
                            $errText ="Account with this email already exists";
                        }
                    }
                    }                    
                    else{
                        $errText = "Password didn't match";
                     }
                 }
                }
                else{
                    echo "Enter Confirm Password";
                }
            }
            else{
                echo "Enter Password";
            }
        }
        else{
            echo "Enter Email";
        }   
    }
    else{
        echo "Enter Username";
    }


}
?>
<!DOCTYPE html>

<head>

  <title>Register Form Design</title>

  <link rel="stylesheet" type="text/css" href="style.css">


<body>

  <div class="box">

    <img src="user.jpg" class="user">

    <h1>Register Here</h1>

    <form name="myform2" action="signup.php" method="POST">

    <span style="color:red"><?php echo $errText ?></span>

      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username" required="">

      <p>Email</p>
      <input type="Email" name="email" placeholder="Enter email id" required="">

      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password" required="">

      <p>Confirm Password</p>
      <input type="password" name="password1" placeholder="Re-Enter Password" required="">


      <input type="submit" name="submit" value="Register">

      <br><br>

      <a href="login.php">Already have an account / Login</a>

    </form>

  </div>

</body>

</head>

</html>