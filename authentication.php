<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "Hotel";
$con = new mysqli($server, $username, $password,$dbname);

if (mysqli_connect_errno()) {
    die ("Failed to connect with MySQL: ". mysqli_connect_error());
}

$firstName = $_POST['First_name']; 
 $nationalIdentity = $_POST['national_identity']; 
 
 //to prevent from mysqli injection 
 $firstName = stripcslashes($firstName); 
 $nationalIdentity = stripcslashes($nationalIdentity); 
 $firstName = mysqli_real_escape_string($con, $firstName); 
 $$nationalIdentity = mysqli_real_escape_string($con, $nationalIdentity); 
$sql = "select * from customer where  First_name= '$firstName' and national_identity='$nationalIdentity'"; 
 $result = mysqli_query($con, $sql); 
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
 $count = mysqli_num_rows($result); 
 
 if($count == 1){ 
//  echo "<h1><center> Login successful </center></h1>"; 
 echo '<script type="text/javascript"> alert("Login successful") </script>';
 header('location:index.php');
 } 
 else{ 
 echo '<script type="text/javascript"> alert("Login failed ! try again") </script>';
//  echo "<h1> Login failed. Invalid username or password.</h1>";
 }  
?> 
