<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty Data</title>
<link rel="stylesheet" href="../View/css/infofac.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

    
<?php
include '../Model/dbfaculty.php';

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?>
<div id="heading">
<a href="../View/Index.php">Go Back</a><br><br>
</div>
<h1>Faculty Data</h1>
<fieldset>
<?php
    $users = getAllUsers();
    for($i = 0; $i < count($users); $i++)
    {
       echo "<ul><li>" 
       ."Faculty Id :" ."&nbsp;&nbsp;" .$users[$i]["id"]."<br>" 
       ."Faculty Name :" ."&nbsp;&nbsp;" .$users[$i]["name"]."<br>" 
       ."Faculty Address :" ."&nbsp;&nbsp;" .$users[$i]["address"]."<br>"
       ."Faculty Contact Number :" ."&nbsp;&nbsp;" .$users[$i]["phone"]."<br>" 
       ."Faculty Email Address :" ."&nbsp;&nbsp;" .$users[$i]["email"]."<br>" 
       ."Faculty Department :" ."&nbsp;&nbsp;" .$users[$i]["dept"]."<br>" 
       ."Faculty Position :" ."&nbsp;&nbsp;" .$users[$i]["position"]."<br>
       </li></ul>" ;
}
?>
</fieldset>

</body>
</html>