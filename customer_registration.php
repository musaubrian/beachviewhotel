<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <!-- <link rel="stylesheet" href="Styles.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Registration_form</title>
</head>
<body>
  
  <form  action="reg_details.php" method="POST" style="height:400px ;" >
    <div class="container border " 
    style="margin-top :20px; width: 400px;height:700px; padding-left: 10px;
    padding: 25px;border-radius: 20px;box-sizing: border-box;">
        <h4 style="border:10px;text-align:center;font-style:italic;margin-top: 15px;"> Register</h4>
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
    &copy;Copyright@2023 All Rights Reserved, Powered by 
  <a href="https://www.facebook.com/search/top?q=rovince%20technosoft%20limited." target="_blank">Rovince Technosoft Limited</a></p>
    
      <br>
       <input type="submit" class="btn btn-primary w-100" name="submit"value="Register">

    </div>
  </form>
        
</body>
</html>