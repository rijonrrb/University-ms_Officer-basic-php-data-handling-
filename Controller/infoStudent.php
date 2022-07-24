<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student data</title>
<link rel="stylesheet" href="../View/css/infostu.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>
    
<?php
include '../Model/dbstudent.php';

  function input_datas($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?>
<div id="heading">
<a href="../View/Index.php">Go Back</a><br><br>
</div>
<h1>Student data</h1>
<fieldset>
<?php
    $users = getAllUsers();
    for($i = 0; $i < count($users); $i++)
    {
       echo "<ul><li>" 
       ."Student Id :" ."&nbsp;&nbsp;" .$users[$i]["id"]."<br>" 
       ."Student Name :" ."&nbsp;&nbsp;" .$users[$i]["name"]."<br>" 
       ."Student Address :" ."&nbsp;&nbsp;" .$users[$i]["address"]."<br>"
       ."Student Contact Number :" ."&nbsp;&nbsp;" .$users[$i]["phone"]."<br>" 
       ."Student Credit Complete :" ."&nbsp;&nbsp;" .$users[$i]["credit"]."<br>" 
       ."Completed Course :" ."&nbsp;&nbsp;" .$users[$i]["course"]."<br>" 
       ."Student CGPA :" ."&nbsp;&nbsp;" .$users[$i]["grade"]."<br>
       </li></ul>" ;
}
?>
</fieldset>

</body>
</html>