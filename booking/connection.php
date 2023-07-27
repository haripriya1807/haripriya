<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "booking";

  $conn =  mysqli_connect($servername, $username, $password, $dbname);
  
  if (!$conn) {
      die("Connection failed: " . $conn->connect_error);
  }
  else { 
    ("coneected successfully");
  }
  
?>
<!-- <?php

//$servername = "localhost";
// $username = "mysql1006.mochahost.com";
// $password = " 2{}A(90f_%F5";
// $dbname = "lanandan_will_notification";

// $conn =  mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else { 
//   ("coneected successfully");
// }

?> -->