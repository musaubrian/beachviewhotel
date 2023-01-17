<?php
$server = "localhost";
$username = "root";
$password = "dbms2022";
$dbname = "Hotel";
$conn = new mysqli($server, $username, $password,$dbname);

if(isset($_POST['update'])) {
        $FirstName = $_POST['First_name'];
        $LastName = $_POST['Last_name'];
        $nationalIdentity = $_POST['national_identity'];
        $PhoneNumber = $_POST['Phone_Number'];
        $Gender = $_POST['Gender'];
        $Residence = $_POST['Residence'];

        $query = "update `customer` set First_name='$FirstName',Last_name='$LastName',Phone_Number='$PhoneNumber',Gender='$Gender' ,Residence='$Residence' where national_identity='$nationalIdentity'";
        $run = mysqli_query($conn,$query) or die("Failed to connect with MySQL: ". mysqli_connect_error());

        if ($run) {
            echo '<script type="text/javascript"> alert("Form updated successfully") </script>';
            header('location:list_of_customers.php');
        } else {
            echo '<script type="text/javascript"> alert("Form updation failed") </script>';
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update customer details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form method="POST" class="col-md-6 offset-md-3 my-5">
      <h6 class="text-center my-3">Update customer details</h6>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="First Name" name="First_name" autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Last Name" name="Last_name" autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="National Identity" name="national_identity" autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="number" class="form-control" placeholder="Phone Number" name="Phone_Number" autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Gender" name="Gender" autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Residence" name="Residence" autocomplete="off">
  </div>
<button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>



