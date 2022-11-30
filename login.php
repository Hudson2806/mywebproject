<?php
$errText="";

$host = "localhost"; 
$dbusername = "root";
$dbpassword = ""; 
$dbname = "my project"; 

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname); 

if(isset($_COOKIE["username"])){
  header("location:home.php");
}

 if(isset($_POST['username'])){ 

$username=$_POST['username']; 
$password=$_POST['password'];

 $sql="select User_Name from user_details where User_Name='".$username."'AND Password='".$password."' limit 1";

 $result=mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)==1){
  setcookie("username",$username,time()+(86400*100),"/");
    header("Location:home.php");
    mysqli_close($conn); exit();

 } else{ 

    $errText= "You Have Entered Incorrect Password";

} 

} 

?>

<!DOCTYPE html>

<head>

 
  <title>Login Form Design</title>

  <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

  <div class="box"> <img src="user.jpg" class="user">

    <h1>Login Here</h1>

    <form name="myform" action="login.php" method="POST">

    <span style="color:red">
      <?php echo $errText ?>
    </span>

      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username" required="">

      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password" required="">


      <input type="submit" name="" value="Login">

      <br><br>

      <a href="signup.php">Register for new account / Signup</a>

    </form>

  </div>

</body>

</html>