
<?php
   $server = "localhost";
   $username = "root";
   $password = "dbms2022";
   $dbname = "Hotel";
   $conn = new mysqli($server, $username, $password,$dbname);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>delete records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container table-responsive-md">
      <h4 style="text-align: center;">Customer's List</h4>
        <button class="btn btn-primary my-5"> <a href="admin_register_customers.php" class="text-light">Insert Customer</a> </button>
        <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr class="table-danger">
                  <th>First name</th>
                  <th>Last name</th>
                  <th>National identity</th>
                  <th>phone number </th>
                  <th>Gender </th>
                  <th>Residence </th>
                  <th>registered date </th>
                  <th>update </th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "Select * from `customer`";
  $result= mysqli_query($conn,$sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)) {
        $First_name = $row['First_name']; 
        $Last_name = $row['Last_name'];
        $national_identity = $row['national_identity'];
        $Phone_Number = $row['Phone_Number'];
        $Gender = $row['Gender'];
        $Residence = $row['Residence'];
        $reg_date = $row['reg_date'];

        echo '
        <tr>
        <th scope="row">'.$First_name.'</th>
        <td>'.$Last_name.'</td>
        <td>'.$national_identity.'</td>
        <td>'.$Phone_Number.'</td>
        <td>'.$Gender.'</td>
        <td>'.$Residence.'</td>
        <td>'.$reg_date.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$national_identity.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deleteUser.php?deleteid='.$national_identity.'" class="text-light">Delete</a></button>
        </td>
      </tr>
            '
            ;
    }
  }
  ?> 
  </tbody> 
</table>
    </div>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

