<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php
    // include paymentformdetails.php file
    include ('PaymentFormDetails.php');
?>
 <div style="margin-top:150px ; margin-bottom: 100px; display: none">
<?php
if( isset($_POST ['submit'])){
    //STKPUSH
  date_default_timezone_set('Africa/Nairobi');

  # access token
  $consumerKey = 'J4lQySNfAAAa4P8ktUlgQdA0KNPGRufs'; //Fill with your app Consumer Key
  $consumerSecret = 'nK3HDS1YsBZ3RJYK'; // Fill with your app Secret

  # define the variales
  # provide the following details, this part is found on your test credentials on the developer account
  $Amount = $_POST['total_order_amount'];
  $BusinessShortCode = '174379';
  $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';  
  
  /*
    This are your info, for
    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
    TransactionDesc can be anything, probably a better description of or the transaction
    $Amount this is the total invoiced amount, Any amount here will be 
    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
    for developer/test accounts, this money will be reversed automatically by midnight.
  */
  
  $PartyA = $_POST['phone_no']; // This is your phone number, 
  $AccountReference = $_POST['full_name'];
  $TransactionDesc = 'test';
//   $Amount = '200';
 
  # Get the timestamp, format YYYYmmddhms -> 20181004151020
  $Timestamp = date('YmdHis');    
  
  # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
  $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

  # header for access token
  $headers = ['Content-Type:application/json; charset=utf8'];

    # M-PESA endpoint urls
  $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

  # callback url
  $CallBackURL = 'https://git.heroku.com/m-pesaa3.git/callback_url.php';  

  $curl = curl_init($access_token_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_HEADER, FALSE);
  curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
  $result = curl_exec($curl);
  $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $result = json_decode($result);
  $access_token = $result->access_token;  
  curl_close($curl);

  # header for stk push
  $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

  # initiating the transaction
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $initiate_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $Password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $Amount,
    'PartyA' => $PartyA,
    'PartyB' => $BusinessShortCode,
    'PhoneNumber' => $PartyA,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => $AccountReference,
    'TransactionDesc' => $TransactionDesc
  );

  $data_string = json_encode($curl_post_data);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  $curl_response = curl_exec($curl);
  print_r($curl_response);

  echo $curl_response;
 }

?>
</div>
<?php

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */

?>

<?php
// include footer.php file
include ('footer.php');
?>

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "Hotel";
$conn = new mysqli($server, $username, $password,$dbname);

if(isset($_POST['submit'])) {

  if(!empty($_POST['total_order_amount']) && !empty($_POST['full_name']) && !empty($_POST['phone_no']) && !empty($_POST['national_ID']) && !empty($_POST['arrivalDate']) && !empty($_POST['leavingDate']) && !empty($_POST['booked_room'])) {

$total_order_amount = $_POST['total_order_amount'];
$full_name = $_POST['full_name'];
$phone_no = $_POST['phone_no'];
$national_ID = $_POST['national_ID'];
$arrivalDate = $_POST['arrivalDate'];
$leavingDate = $_POST['leavingDate'];
$booked_room = $_POST['booked_room'];

$query = "insert into booking(total_order_amount,full_name,phone_no,national_ID,arrivalDate,leavingDate,booked_room) values ('$total_order_amount','$full_name','$phone_no','$national_ID','$arrivalDate','$leavingDate','$booked_room')";
$result = mysqli_query($conn, $query) or die("Failed to connect with MySQL". mysqli_connect_error());

if ($result) {
  echo '<script type="text/javascript"> alert("Booked Successfully") </script>';
} else {
  echo '<script type="text/javascript"> alert("Booking failed") </script>';

}

} else {
  echo '<script type="text/javascript"> alert("all fields are required") </script>';

}
}

?>