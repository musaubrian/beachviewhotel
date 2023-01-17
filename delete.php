<?php
$server = "localhost";
$username = "root";
$password = "dbms2022";
$dbname = "Hotel";
$conn = new mysqli($server, $username, $password,$dbname);

if(isset($_GET['deleteid'])) {
    $national_ID=$_GET['deleteid'];

    $sql= "delete from `booking` where national_ID='$national_ID'";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        header('location:bookings.php');
        // echo '<script type="text/javascript"> alert("Data deleted successfully") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Deletion failed") </script>';
    }

}
?>