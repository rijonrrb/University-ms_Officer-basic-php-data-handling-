<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<script src="../View/js/changepass.js"></script>
<link rel="stylesheet" href="../View/css/password.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

<?php
include '../Model/dbPass.php';
$newpasswordErr = $oldpasswordErr = "";  
$newpassword = $oldpassword = ""; 
$flag = false;
$successfulMessage = $errorMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["oldpassword"])) 
    {  
        $oldpasswordErr = " *This is field can't be empty"; 
        $flag = True;
    } 
  
    if (empty($_POST["newpassword"])) 
    {  
        $newpasswordErr = " *This is field can't be empty"; 
        $flag = True;
    } 
        

    if(!$flag) 
    {

    $oldpassword = input_data($_POST["oldpassword"]);
    $newpassword = input_data($_POST["newpassword"]);
    $username = "";
    if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    }
    $users = oldpass($username);
    for($i = 0; $i < count($users); $i++)
    {
    
    if($oldpassword === $users[$i]["password"])
    {

    $Pass = Pass($newpassword, $username);  
    if($Pass) {
    $successfulMessage = "Password successful changed";
    }
    else {
    $errorMessage = "There maybe some Error";
    }
    }
    else {
    $errorMessage = "Wrong old password";
    }
    }
   }
  }

function input_data($data) {  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
?>
<div id="heading">
<a href="../view/Index.php">Go Back</a><br>
</div>
<h1>Change Password</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="cpass" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
 <fieldset>
 <label for="oldpassword">Enter Old Password:</label>
 <input type="password" id="oldpassword" name="oldpassword" placeholder="Write here">
 <span id="oldpasswordErr"></span>
 <?php echo $oldpasswordErr; ?><br><br>
 <label for="newpassword">Enter New Password:</label>
 <input type="password" id="newpassword" name="newpassword" placeholder="Write here">
 <span id="newpasswordErr"></span>
 <?php echo $newpasswordErr; ?>
 <br><br><input type="submit" value="Submit" class="sub">
<br>
<?php echo "<b>".$successfulMessage."</b>"; ?>
<?php echo "<b>".$errorMessage."</b>"; ?>
 </form>
</fieldset>
</body>
</html>