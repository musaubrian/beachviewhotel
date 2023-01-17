
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
      <h4 style="text-align: center;">Comments</h4>
        <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr class="table-danger">
                  <th>National id</th>
                  <th>Full name</th>
                  <th>Comment</th>
                  <th>Uploaded file </th>
                  <th>date </th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "Select * from `comments`";
  $result= mysqli_query($conn,$sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)) {
        $national_id = $row['national_id']; 
        $full_name = $row['full_name'];
        $comments = $row['comments'];
        $File = $row['File'];
        $comment_date = $row['comment_date'];

        echo '
        <tr>
        <th scope="row">'.$national_id.'</th>
        <td>'.$full_name.'</td>
        <td>'.$comments.'</td>
        <td>'.$File.'</td>
        <td>'.$comment_date.'</td>
        <td>
        <button class="btn btn-danger"><a href="deleteUser.php?deleteid='.$national_id.'" class="text-light">Delete</a></button>
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

