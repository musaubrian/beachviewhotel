
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
      <h4 style="text-align: center;">Rooms</h4>
        <button class="btn btn-primary my-5"> <a href="addroom.php" class="text-light">Add room</a> </button>
        <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr class="table-danger">
                  <th>Room id</th>
                  <th>Brand</th>
                  <th>Room name</th>
                  <th>Room price </th>
                  <th>Room image </th>
                  <th>Added date </th>
                  <th>Update </th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "Select * from `product`";
  $result= mysqli_query($conn,$sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)) {
        $item_id = $row['item_id']; 
        $item_brand = $row['item_brand'];
        $item_name = $row['item_name'];
        $item_price = $row['item_price'];
        $item_image = $row['item_image'];
        $item_register = $row['item_register'];

        echo '
        <tr>
        <th scope="row">'.$item_id.'</th>
        <td>'.$item_name.'</td>
        <td>'.$item_name.'</td>
        <td>'.$item_price.'</td>
        <td>'.$item_image.'</td>
        <td>'.$item_register.'</td>
        <td>
        <button class="btn btn-primary"><a href="?updateid='.$item_name.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href=".php?deleteid='.$item_name.'" class="text-light">Delete</a></button>
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

