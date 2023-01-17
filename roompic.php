<?php

$item_id = $_POST['item_id'];
$item_brand = $_POST['item_brand'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$item_image = $_POST['item_image'];
$item_register = $_POST['item_register'];



$link = mysqli_connect('localhost', 'root',"","hotel");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}else{
    $stmt= $link->prepare(" insert into product(item_id,item_brand,item_name,item_price,item_image,item_register) values (?,?,?,?,?,?)");
    $stmt->bind_param("ssiiss",$item_id,$item_brand,$item_name,$item_price,$item_image,$item_register);
    $stmt->execute();
 echo '<script type="text/javascript"> alert("Registration Successful. Thank you") </script>';
 header('location:addroom.php');

    $stmt->close();
    $link->close();
}




?>