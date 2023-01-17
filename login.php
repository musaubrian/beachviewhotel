
<?php 

$server = "localhost";
$username = "root";
$password = "dbms2022";
$dbname = "Hotel";
$con = new mysqli($server, $username, $password,$dbname);

if (mysqli_connect_errno()) {
    die ("Failed to connect with MySQL: ". mysqli_connect_error());
}
if(isset($_POST['submit'])) {
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

}
?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <!-- <link rel="stylesheet" href="Styles.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
  <form  action="" method="POST">
    <div class="container border " 
    style="margin-top :20px; width: 400px; padding-left: 10px;
    padding: 25px;border-radius: 20px;box-sizing: border-box;">
        <h4 style="border:10px;text-align:center;font-style:italic;margin-top: 15px;"> User Login</h4>
         <a style="text-align: center;" href="admin_login.php"> Login as an admin</a><br><br>
        
         <div class="form-floating">
        <input type="text" class="form-control" name="First_name" placeholder="first name" maxlength="30" required>
        <label for="CustomerId">First_name</label>
      </div><br>

      <div class="form-floating">
        <input type="password" class="form-control" id="CustomerId" placeholder="National ID" name="national_identity" maxlength="8" required>
        <label for="CustomerId">Nationaal ID</label>
      </div><br>
        
      <br>
       <input type="submit" class="btn btn-primary w-100" name="submit" value="Login"><br><br>
       <a href="customer_registration.php" style="margin-left:20px">
       Don't have account? Click here to register</a>
          
</body>
</html>


