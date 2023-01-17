





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
  <form  action="chartpic.php" method="POST">
    <div class="container border " 
    style="margin-top :20px; width: 600px; padding-left: 10px;
    padding: 25px;border-radius: 20px;box-sizing: border-box;">
        <h4 style="border:10px;text-align:center;font-style:italic;margin-top: 15px;"> Leave a comment</h4>
       
        <h6>National id</h6>
      <div class="">
        <input type="text" class="form-control"  placeholder="" name="national_id" maxlength="8" required>
      </div><br>

      <h6>Full name</h6>
      <div class="">
        <input type="text" class="form-control" id="CustomerId" placeholder="" name="full_name" maxlength="20" required>
      </div><br>
       
      
        <h6>Comment</h6>
      <div class="">
        <input type="text-area" class="form-control" placeholder="" name="comments" maxlength="200" required>
      </div><br>
       
      <h6>upload a file</h6>
       
        <div class="form-floating">
        <input type="file" class="form-control" name="File" maxlength="">
      </div><br>
       
        
      <br>
       <input type="submit" class="btn secondary w-100" name="submit" value="send"><br><br>
       
</body>
</html>

<?php

