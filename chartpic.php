<?php

$national_id = $_POST['national_id'];
$full_name = $_POST['full_name'];
$comments = $_POST['comments'];
$File = $_POST['File'];



$link = mysqli_connect('localhost', 'root',"","hotel");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}else{
    $stmt= $link->prepare(" insert into comments(national_id,full_name,comments,File) values (?,?,?,?)");
    $stmt->bind_param("isss",$national_id,$full_name,$comments,$File);
    $stmt->execute();
 echo '<script type="text/javascript"> alert("Comment submitted successfully. Thank you") </script>';
 header('location:index.php');

    $stmt->close();
    $link->close();
}


