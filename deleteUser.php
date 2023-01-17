<?php
$server = "localhost";
$username = "root";
$password = "dbms2022";
$dbname = "Hotel";
$conn = new mysqli($server, $username, $password,$dbname);

if(isset($_GET['deleteid'])) {
    $national_identity=$_GET['deleteid'];

    $sql= "delete from `customer` where national_identity='$national_identity'";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        header('location:list_of_customers.php');
        // echo '<script type="text/javascript"> alert("Data deleted successfully") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Deletion failed") </script>';
    }

}
?>