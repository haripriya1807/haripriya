<?php

    include"connection.php";
    //  var_dump($_POST);
    // exit; 
    // if($_POST) { 
    
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
//
//  if(!$query) {
//    die(mysqli_error($conn));
//  }

//   echo json_encode($data);
    // return json_encode($data);

// }
// else {
    //     header('location:index.php');
    // }
?>

