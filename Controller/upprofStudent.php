<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student Data Edit</title>
<script src="../View/js/upstudent.js"></script>
<link rel="stylesheet" href="../View/css/upstu.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>


    
<?php
include '../Model/dbstuUp.php';
$idErr = $nameErr = $addressErr = $phoneErr = $creditErr = $courseErr = $gradeErr = "";  
$id = $name = $address = $phone = $credit = $course = $grade = "";  
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
    if (empty($_POST["credit"])) 
    {  
        $creditErr = " *This field can't be empty";
        $flag = True;  
    } 

    if (empty($_POST["course"])) 
    {  
        $courseErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["grade"])) 
    {  
        $gradeErr = " *This field can't be empty";
        $flag = True;  
    } 

    if(!$flag) 
    {

     $id = input_data($_POST["id"]);
     $name = input_data($_POST["name"]);
     $address = input_data($_POST["address"]);
     $phone = input_data($_POST["phone"]);
     $credit = input_data($_POST["credit"]);
     $course = input_data($_POST["course"]);
     $grade = input_data($_POST["grade"]);
      

        $upstu = upstu($name, $address, $phone,$credit, $course, $grade, $id);
        if($upstu) {
        $successfulMessage = "Profile successfully Updated";
        }
        else {
        $errorMessage = "Error while Updating.";
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
<h1>Update Student information</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="upstu" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
    <label for="id">Enter Student ID For Update Data:</label>
    <input type="text" id="id" name="id" placeholder="Write here">
    <span id="idErr"></span>
    <?php echo $idErr; ?>  <br><br>
    <fieldset>
    <label for="name">Enter Student Name:</label>
    <input type="text" id="name" name="name" placeholder="Write here">
    <span id="nameErr"></span>
    <?php echo $nameErr; ?>  <br><br>
    <label for="address">Enter Student Address:</label>
    <textarea name="address" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="addressErr"></span>
    <?php echo $addressErr; ?><br><br>
    <label for="phone">Enter Student phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Write here">
    <span id="phoneErr"></span>
    <?php echo $phoneErr; ?><br><br>
    <label for="credit">Enter Student Completed Credit Number:</label>
    <input type="text" id="credit" name="credit" placeholder="Write here">
    <span id="creditErr"></span>
    <?php echo $creditErr; ?>  <br><br>
    <label for="course">Enter Student Course Name:</label>
    <textarea name="course" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="courseErr"></span>
    <?php echo $courseErr; ?><br><br>
    <label for="grade">Enter Student Grade:</label>
    <input type="text" id="grade" name="grade" placeholder="Write here">
    <span id="gradeErr"></span>
    <?php echo $gradeErr; ?><br><br>
    </fieldset>
  <br><input type="submit" value="Submit" class="sub">
   <br><br>
   <?php echo "<b>".$successfulMessage."</b>"; ?>
   <?php echo "<b>".$errorMessage."</b>"; ?>
 </form>
</body>
</html>