<?php

$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "my project"; 

$mobileno="" ;$f_name=""; $l_name=""; $dob="";$country="";$state="";$errText="";

 // Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["Mobile_No"])){
        if(!empty($_POST["First_Name"])){
            if(!empty($_POST["Last_Name"])){
                if(!empty($_POST["DOB"])){
                    if(!empty($_POST["Country"])){
                       if(!empty($_POST["State"])){
                        $mobileno = $_POST["Mobile_No"];
                        $firstname = $_POST["First_Name"];
                        $lastname = $_POST["Last_Name"];
                        $dob = $_POST["DOB"];
                        $country = $_POST["Country"];
                        $state = $_POST["State"];
                        $username = $_COOKIE["username"];

                        $query1 ="select Mobile_No from user_details where Mobile_No = '$mobileno'";
                        $result1 = mysqli_query($conn,$query1);
                        
                        if($result1){
                             if(mysqli_num_rows($result1) == 0){
                                   $query2 = "update user_details set Mobile_No = '$mobileno',First_Name = '$firstname',Last_Name = '$lastname',DOB='$dob',country='$country',state='$state' where User_Name = '$username'";
                                   $result2 = mysqli_query($conn,$query2);
                        
                                 if($result2){
                                      header("Location:home.php");
                                      mysqli_close($conn);
                                   }
                        
                                else{
                                    echo("Error description: " . mysqli_error($con));
                                   }
                               }
                            else{
                                  $errText = "Mobileno already exists";
                               }
                           }
                 
                        }
                         else{
                           echo "Enter State";
                        }
                    }
                      else{
                        echo "Enter Country";
                    }
                }
                  else{
                       echo "Enter DOB";
                }   
            }
              else{
               echo "Enter Lastname";
            }
        }
        else {
            echo "Enter Firstname";
        }
    }
    else{
        echo "Enter Mobile Number";
    }

}
}
?>

<!DOCTYPE html>

<head>

 
  <title>Profile Form Design</title>

  <link rel="stylesheet" type="text/css" href="style.css">


<body>

  <div class="box">

    <img src="user.jpg" class="user">

    <h1>Add Profile Details</h1>

    <form name="myform3" action="profile.php" method="POST">

    <span style="color:red"><?php echo $errText ?></span>

      <p>Mobile No</p>
      <input type="tel" name="Mobile_No" placeholder="Enter Mobile No" required="">

      <p>First Name</p>
      <input type="text" name="First_Name" placeholder="Enter First Name" required="">

      <p>Last Name</p>
      <input type="text" name="Last_Name" placeholder="Enter Last Name" required="">

      <p>DOB</p>
      <input type="date" name="DOB" placeholder="Enter DOB" required="">

      <p>Country</p>
      <input type="text" name="Country" placeholder="Enter Country Name" required="">

      <p>State</p>
      <input type="text" name="State" placeholder="Enter State Name" required="">




      <input type="submit" name="submit" value="Submit">

      <br><br>

      <a href="login.php">Already have an account / Login</a>

    </form>

  </div>

</body>

</head>

</html>