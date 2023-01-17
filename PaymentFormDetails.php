<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <style>
      .slip{
       
        /* text-align: center; */
        height: 400px;
        width: 300px;
        background-color: antiquewhite;
        border-radius: 5px;
        margin: auto;
        padding-top: 10px;
        padding-left: 20px;
      }
      body {
        margin-top: 100px;
      }

      h3 {
        text-align: center;
      }
      .slip-text {
        font-weight: bolder;
        color: blue;
      }

      .btn {
        margin-left: 60px;
      }
    </style>
</head>
<body>
  <div class="slip container">
<h3>Booking Slip</h3>
  Total Amount:<span class="slip-text"><?php echo $_POST["total_order_amount"] ?></span>    
  <br>
  Full Name:<span class="slip-text"> <?php echo $_POST["full_name"] ?> </span>
  <br>
  Phone Number:<span class="slip-text"><?php echo $_POST["phone_no"] ?> </span>
  <br>
  National Identity:<span class="slip-text"><?php echo $_POST["national_ID"] ?></span>  
<br>
     Arrival Date:<span class="slip-text"><?php echo $_POST["arrivalDate"] ?> </span>
   <br>
     Leaving Date:<span class="slip-text"><?php echo $_POST["leavingDate"] ?></span> 
     <br> 
     Booked room:<span class="slip-text"><?php echo $_POST["booked_room"] ?></span> 
<br>
<br>
<a href="PaymentFormDetails.php" download class='btn btn-primary'>Download Slip</a>
</div>
 <br>
<hr>

</body>
</html>