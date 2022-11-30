<?php

$User_Name = $_POST['User Name']; 
$Email_id = $_POST['Email id']; 
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm Password']; 

if (!empty($User_Name)  !empty($Email_id)  !empty($Password) || !empty($Confirm_Password) ) 

{ 

$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "my project"; 

// Create connection

 $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname); 

if (mysqli_connect_error()){ 
die('Connect Error ('. mysqli_connect_errno() .') ' 
. mysqli_connect_error()); 

} 
else{ 
$SELECT = "SELECT Email id From user details Where Email id = ? Limit 1";
 $INSERT = "INSERT Into user details (User Name , Email id ,Password, Confirm Password )values(?,?,?,?)"; 

//Prepare statement

 $stmt = $conn->prepare($SELECT);
 $stmt->bind_param("s", $Email_id);
 $stmt->execute(); $stmt->bind_result($Email_id);
 $stmt->store_result(); 
$rnum = $stmt->num_rows;

 //checking username

 if ($rnum==0) { 
$stmt->close(); 
$stmt = $conn->prepare($INSERT);
 $stmt->bind_param("ssss", $User_Name,$Email_id,$Password,$Confirm_Password);
 $stmt->execute(); 

echo "New record inserted sucessfully"; 

} 
else { 
echo "Someone already register using this email"; 
}
 $stmt->close(); 
$conn->close(); 
}

 } else { 
echo "All field are required";
 die(); 
} 

?>