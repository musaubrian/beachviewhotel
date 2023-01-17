<?php

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$national_identity = $_POST['national_identity'];
$phone_number = $_POST['phone_number'];
$Gender = $_POST['Gender'];
$Residence = $_POST['Residence'];



$link = mysqli_connect('localhost', 'root',"dbms2022","hotel");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}else{
    $stmt= $link->prepare(" insert into customer(First_name,Last_name,national_identity,phone_number,Gender,Residence) values (?,?,?,?,?,?)");
    $stmt->bind_param("ssiiss",$First_name,$Last_name,$national_identity,$phone_number,$Gender,$Residence);
    $stmt->execute();
 echo '<script type="text/javascript"> alert("Registration Successful. Thank you") </script>';
 header('location:login.php');

    $stmt->close();
    $link->close();
}




?>