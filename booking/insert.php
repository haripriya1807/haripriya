<?php

    include"connection.php";
    if(isset($_POST['submit'])){
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
    ?>

    <script>
    swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
      });
      </script>
      <?php

}
else {
   
    $return['status'] = 'error';
    $return['message'] = 'Data insertion failed';
}
    }
?>



