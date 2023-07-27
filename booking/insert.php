<?php

    include"connection.php";
    
$firstName = $_POST["firstName"];
$dateadd = $_POST["dateadd"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$address = $_POST["address"];
$selectField = $_POST["selectField"];
$gender = $_POST['gender'];

$sql="INSERT INTO photo_form(firstName ,dateadd ,email ,phoneNumber ,address ,selectField ,gender ) VALUES('$firstName','$dateadd','$email','$phoneNumber','$address','$selectField','$gender')"; 

$query=mysqli_query($conn,$sql);


if($query){
    $return['status'] = 'success';
    $return['message'] = 'Data inserted successfully';
    header('location:index.php');
}
else {
   
    $return['status'] = 'error';
    $return['message'] = 'Data insertion failed';
}
?>



