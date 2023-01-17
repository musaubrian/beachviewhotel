<?php
if(isset($_POST['submit'])) {


$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$national_identity = $_POST['national_identity'];
$phone_number = $_POST['phone_number'];
$Gender = $_POST['Gender'];
$Residence = $_POST['Residence'];



$link = mysqli_connect('localhost', 'root',"","hotel");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}else{
    $stmt= $link->prepare(" insert into customer(First_name,Last_name,national_identity,phone_number,Gender,Residence) values (?,?,?,?,?,?)");
    $stmt->bind_param("ssiiss",$First_name,$Last_name,$national_identity,$phone_number,$Gender,$Residence);
    $stmt->execute();
 echo '<script type="text/javascript"> alert("Customer registered successfully") </script>';
 header('location:list_of_customers.php');

    $stmt->close();
    $link->close();
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
    <title>Add customer</title>
</head>
<body>
  
  <form method="POST" style="height:400px ;" >
    <div class="container border " 
    style="margin-top :20px; width: 400px;height:700px; padding-left: 10px;
    padding: 25px;border-radius: 20px;box-sizing: border-box;">
        <h4 style="border:10px;text-align:center;font-style:italic;margin-top: 15px;">Add customer</h4>
        <div class="form-floating">
        <input type="text" class="form-control" name="First_name" placeholder="first name" maxlength="30" required>
        <label for="CustomerId">First_name</label>
      </div><br>

      <div class="form-floating">
        <input type="text" class="form-control" name="Last_name" placeholder="last name" maxlength="30" required>
        <label for="CustomerId">Last_name</label>
      </div><br>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="national_identity" maxlength="8" placeholder="national id" required>
        <label for="floatingInput">National Identity:</label>
      </div>
      

      <div class="form-floating">
        <input type="text" class="form-control" name="phone_number"placeholder="Phone Number" maxlength="10" required>
        <label for="phone_number">Phone Number: </label>
      </div><br>

      <div class="form-floating">
        <input type="text" class="form-control" name="Gender" placeholder="Gender" maxlength="6" required>
        <label for="Gender">Gender</label>
      </div><br>

      <div class="form-floating">
        <input type="text" class="form-control" name="Residence" placeholder="Residence" maxlength="20" required>
        <label for="Residence">Residence</label>
      </div><br>
        
    
      <br>
       <input type="submit" class="btn btn-primary w-100" name="submit"value="Add customer">

    </div>
  </form>
        
</body>
</html>