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
  <form  action="roompic.php" method="POST">
    <div class="container border " 
    style="margin-top :20px; width: 600px; padding-left: 10px;
    padding: 25px;border-radius: 20px;box-sizing: border-box;">
        <h4 style="border:10px;text-align:center;font-style:italic;margin-top: 15px;"> Add room</h4>
       
        <h6>Room id</h6>
      <div class="">
        <input type="text" class="form-control"  placeholder="" name="item_id" maxlength="8" required>
      </div><br>

      <h6>Brand</h6>
      <div class="">
        <input type="text" class="form-control" placeholder="" name="item_brand" maxlength="20" required>
      </div><br>
       
      
        <h6>Room name</h6>
      <div class="">
        <input type="paragraph" class="form-control" placeholder="" name="item_name"  required>
      </div><br>
      
      <h6>Room price</h6>
      <div class="">
        <input type="paragraph" class="form-control" placeholder="" name="item_price" maxlength="200" required>
      </div><br>
      
      
      <h6> Room image</h6>
      
        <div class="form-floating">
        <input type="file" class="form-control" name="item_image" maxlength="" required>
      </div><br>
       
      <h6> Added date</h6>
      
      <div class="form-floating">
      <input type="date" class="form-control" name="item_register" maxlength="" required>
    </div><br>
      <br>
       <input type="submit" class="btn secondary w-100" name="submit" value="Add room"><br><br>
       
</body>
</html>

