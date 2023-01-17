
<?php

use LDAP\Result;

$server = "localhost";
$username = "root";
$password = "dbms2022";
$dbname = "Hotel";
$conn = new mysqli($server, $username, $password,$dbname);

$sql = "select  * from `product` ";
$result = mysqli_query($conn,$sql);


if($result){
 if ($row = mysqli_fetch_array($result)){

  $item_name=$row['item_name'];
 }



}

?>


<?php

if(isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $phone_no = $_POST['phone_no'];
        $national_ID = $_POST['national_ID'];
        $arrivalDate = $_POST['arrivalDate'];
        $leavingDate = $_POST['leavingDate'];
        $booked_room = $_POST['booked_room'];

        $query = "update `booking` set full_name='$full_name', phone_no='$phone_no', arrivalDate='$arrivalDate',leavingDate='$leavingDate' ,booked_room='$booked_room' where national_ID='$national_ID'";
        $run = mysqli_query($conn,$query) or die("Failed to connect with MySQL: ". mysqli_connect_error());

        if ($run) {
            echo '<script type="text/javascript"> alert("Form updated successfully") </script>';
            header('location:list_of_customers.php');
        } else {
            echo '<script type="text/javascript"> alert("Form updation failed") </script>';
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- DEPENDENCIES FILES -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title></title>
  </head>
  <body>
    <div class="container-fluid col-lg-6 col-md-9" style="margin-top: 60px;">
        <div class="text-center">
          <p class="lead">Enter Your Payment Details Below</p>
        </div>
        <form action="stkpay.php" method="POST" autocomplete="on">
        <div class="row justify-content-center my-5">
          <div class="form-floating my-3" style="display: none;">
            <input
              type="number"
              id="amount"
              name="total_order_amount"
              placeholder="Total Amount To Be Deducted From Your Account is KSH:"
              class="form-control"
              value="<?php echo isset($subTotal) ? floor($Cart->getSum($subTotal)) : 0; ?>"
            
            />
            <label for="amount" class="form-label"> <span style="color:black ; font-weight: bolder;">Total Amount To Be Deducted From Your Account is KSH:</span></label>
          </div>

          <div class="form-floating my-3">
            <input
              type="number"
              id="amount"
              placeholder="Total Amount To Be Deducted From Your Account is KSH:"
              class="form-control"
              value="<?php echo isset($subTotal) ? floor($Cart->getSum($subTotal)) : 0; ?>"
              disabled
            />
            <label for="amount" class="form-label"> <span style="color:black ; font-weight: bolder;">Total Amount To Be Deducted From Your Account is KSH:</span></label>
          </div>

          <div class="form-floating my-3">
            <input
              type="text"
              id="name"
              name="full_name"
              placeholder="fullname"
              class="form-control"
              required
            />
            <label for="name" class="form-label">Full Name*</label>
          </div>

          <div class="form-floating my-3">
            <input
              type="number"
              id="id"
              name="phone_no" 
              placeholder="254748223540"
              class="form-control"
              value="254"
              required
            />
            <label for="id" class="form-label">Phone Number* <span style="font-weight: bolder ;">Note: Must start with 2547....</span> </label>
          </div>
          <div class="form-floating my-3">
            <input
              type="number"
              id="id"
              placeholder="42672329"
              class="form-control"
              name="national_ID"
              required
            />
            <label for="id" class="form-label">National IDentity (<span style="font-weight: bolder ;">ID</span>)*</label>
          </div>

          <div class="form-floating my-3">
            <input
              type="date"
              id="date"
              placeholder="yymmdd"
              class="form-control"
              name="arrivalDate"
              required
            />
            <label for="id" class="form-label">Arrival Date*</label>
          </div>

          <div class="form-floating my-3">
            <input
              type="date"
              id="date"
              placeholder="yymmdd"
              class="form-control"
              name="leavingDate"
              required
            />
            <label for="id" class="form-label">Leaving Date*</label>
          </div>
          
          <div class="form-floating my-3">
            <input
              type="text"
              id="room"
              placeholder="Date"
              class="form-control"
              name="booked_room"
              value="<?php echo ($item_name)?>"
              required
            
            />
            <label for="id" class="form-label">Booked room*</label>
          </div>

          
          <div class="text-center my-3" style="display: flex; gap: 50px;">
            <input type="submit" name="submit" value="Check Out" class="btn btn-primary">
            
          </div>

        </div>

        </form>
      </div>
    <!-- SCRIPTS FILES -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="index.js"></script>
  </body>
</html>
