<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty Data Edit</title>
<script src="../View/js/upfaculty.js"></script>
<link rel="stylesheet" href="../View/css/upfac.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>


    
<?php
include '../Model/dbupFac.php';
$idErr = $nameErr = $addressErr = $phoneErr = $emailErr = $deptErr = $positionErr = "";  
$id = $name = $address = $phone = $email = $dept = $position = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["id"])) 
    {  
        $idErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["name"])) 
    {  
        $nameErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["address"])) 
    {  
        $addressErr = "*This field can't be empty";
        $flag = True;  
    } 
    if (empty($_POST["phone"])) 
    {  
        $phoneErr = " *This field can't be empty";
        $flag = True;  
    }  
    if (empty($_POST["email"])) 
    {  
        $emailErr = " *This field can't be empty";
        $flag = True;  
    } 

    if (empty($_POST["dept"])) 
    {  
        $deptErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["position"])) 
    {  
        $positionErr = " *This field can't be empty";
        $flag = True;  
    } 

    if(!$flag) 
    {

     $id = input_data($_POST["id"]);
     $name = input_data($_POST["name"]);
     $address = input_data($_POST["address"]);
     $phone = input_data($_POST["phone"]);
     $email = input_data($_POST["email"]);
     $dept = input_data($_POST["dept"]);
     $position = input_data($_POST["position"]);
      

        $upfac = upfac($name, $address, $phone,$email, $dept, $position, $id);
        if($upfac) {
        $successfulMessage = "Profile successfully Updated";
        }
        else {
        $errorMessage = "Wrong Id inserted";
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
<a href="../View/Index.php">Go Back</a><br>
</div>
<h1>Update Faculty information</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="upfac" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
    <label for="id">Enter Faculty ID For Update Data:</label>
    <input type="text" id="id" name="id" placeholder="Write here">
    <span id="idErr"></span>
    <?php echo $idErr; ?>  <br><br>
    <fieldset>
    <label for="name">Enter Faculty Name:</label>
    <input type="text" id="name" name="name" placeholder="Write here">
    <span id="nameErr"></span>
    <?php echo $nameErr; ?>  <br><br>
    <label for="address">Enter Faculty Address:</label>
    <textarea name="address" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="addressErr"></span>
    <?php echo $addressErr; ?><br><br>
    <label for="phone">Enter Faculty phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Write here">
    <span id="phoneErr"></span>
    <?php echo $phoneErr; ?><br><br>
    <label for="email">Enter Faculty Email Address:</label>
    <input type="text" id="email" name="email" placeholder="Write here">
    <span id="emailErr"></span>
    <?php echo $emailErr; ?>  <br><br>
    <label for="dept">Enter Faculty Department name:</label>
    <input type="text" id="dept" name="dept" placeholder="Write here">
    <span id="deptErr"></span>
    <?php echo $deptErr; ?><br><br>
    <label for="position">Enter Faculty Position:</label>
    <input type="text" id="position" name="position" placeholder="Write here">
    <span id="positionErr"></span>
    <?php echo $positionErr; ?><br><br>
    </fieldset>
  <br><input type="submit" value="Submit" class="sub">
 <br><br>
 <?php echo "<b>".$successfulMessage."</b>"; ?>
 <?php echo "<b>".$errorMessage."</b>"; ?>
 </form>
</body>
</html>