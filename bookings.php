

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
      <h4 style="text-align: center;">Booking history</h4>
        <button class="btn btn-primary my-5"> <a href="paymentform.php" class="text-light">Insert booking</a> </button>
        <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr class="table-danger">
                    <th scope="col">Total amount</th>
                  <th scope="col">Full name</th>
                  <th scope="col">Phone number</th>
                  <th scope="col">National id </th>
                  <th scope="col">Arrival date </th>
                  <th scope="col">Leaving date </th>
                  <th scope="col">Booked room </th>
                  <th scope="col">Booked date </th>
                  <th scope="col">Update  </th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "Select * from `booking`";
  $result= mysqli_query($conn,$sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)) {
        $total_order_amount = $row['total_order_amount']; 
        $full_name = $row['full_name'];
        $phone_no = $row['phone_no'];
        $national_ID = $row['national_ID'];
        $arrivalDate = $row['arrivalDate'];
        $leavingDate = $row['leavingDate'];
        $booked_room = $row['booked_room'];
        $book_date = $row['book_date'];

        echo '
        <tr>
        <th scope="row">'.$total_order_amount.'</th>
        <td>'.$full_name.'</td>
        <td>'.$phone_no.'</td>
        <td>'.$national_ID.'</td>
        <td>'.$arrivalDate.'</td>
        <td>'.$leavingDate.'</td>
        <td>'.$booked_room.'</td>
        <td>'.$book_date.'</td>
        <td>
        <button class="btn btn-primary"><a href="bookingupdate.php?updateid='.$national_ID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$national_ID.'" class="text-light">Delete</a></button>
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

