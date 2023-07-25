<?php
//  include("connection.php");
require_once('connection.php');
 $query="select * from photo_form";
 $result = mysqli_query($conn,$query);
//  $sendData = [];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</body>
<div class="fetchtable">
<button type="button" class="button"><span class="text"><< &nbsp  </span><a href="index.php">BACK</a></button>
    <table id ="mytable" border="1">
      <tr>
          <th>id</th>
          <th>User Name</th>
          <th>Event Date</th>
          <th>Email ID</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Photography Type</th>
          <th>Gender</th>
       </tr>
       <tr>
        <?php
       while($res=mysqli_fetch_assoc($result)){
        ?>
        <td><?php echo $res['id'] ?> </td>
        <td><?php echo $res['firstName'] ?> </td>
        <td><?php echo $res['dateadd'] ?> </td>
        <td><?php echo $res['email'] ?> </td>
        <td><?php echo $res['phoneNumber'] ?> </td>
        <td><?php echo $res['address'] ?> </td>
        <td><?php echo $res['selectField'] ?> </td>
        <td><?php echo $res['gender'] ?> </td>
       </tr>
       <?php
 }
 ?>
    </table>
</div>
    <style>
        
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            background-color: white;
            color: black;
            width: 100%;
            margin: auto;
            margin-top: 29px;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            color: black;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .button{
            margin: 5px;
             margin-top: 47px;
             background-color: black;
             color: white;
             width: 133px;
             border-radius: 6px;
             padding: 13px;
             margin-left: 43px;
            }
            .button a{
                color: white;
            }
        
        </style>
</body>
</html>

