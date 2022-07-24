<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<script src="../View/js/reg.js"></script>
<link rel="stylesheet" href="../View/css/reg.css"></link>
</head>
<body>
<?php
include '../Model/dbReg.php';
$fnameErr = $lnameErr = $genderErr = $dobErr = $religionErr = $PreaddressErr = $PeraddressErr  = $phoneErr = $emailErr =  $usernameErr = $passwordErr = $cpasswordErr = "";  
$fname = $lname = $gender = $dob = $religion = $Preaddress = $Peraddress  = $phone = $email =  $username = $password = $cpassword = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["gender"])) 
    {  
        $genderErr = "*This field can't be empty";
        $flag = True;  
    } 
    if (empty($_POST["dob"])) 
    {  
        $dobErr = " *This field can't be empty";
        $flag = True;  
    }  
    if (empty($_POST["religion"])) 
    {  
        $religionErr = " *This field can't be empty";
        $flag = True;  
    } 

    if (empty($_POST["Preaddress"])) 
    {  
        $PreaddressErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["Peraddress"])) 
    {  
        $PeraddressErr = " *This field can't be empty";
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

    if (empty($_POST["username"])) 
    {  
       $usernameErr = " *This field can't be empty";
       $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $passwordErr = " *This field can't be empty";
       $flag = True;  
    } 
    if (empty($_POST["cpassword"])) 
    {  
       $cpasswordErr = " *This field can't be empty";
       $flag = True;  
    } 


    
   if(!$flag) 
   {
     $fname = input_data($_POST["fname"]);
     $lname = input_data($_POST["lname"]);
     $gender = input_data($_POST["gender"]);
     $dob = input_data($_POST["dob"]);
     $religion = input_data($_POST["religion"]);
     $Preaddress = input_data($_POST["Preaddress"]);
     $Peraddress = input_data($_POST["Peraddress"]);
     $phone = input_data($_POST["phone"]);
     $email = input_data($_POST["email"]);
     $username = input_data($_POST["username"]);
     $password = input_data($_POST["password"]);
     $cpassword = input_data($_POST["cpassword"]);
     
     if($cpassword == $password )  
     {
        $reg = reg($fname, $lname, $gender, $dob,$religion, $Preaddress, $Peraddress, $phone,$email, $username, $password);
        if($reg) {
        header("Location: ../Controller/login.php");
        }
        else {
        $errorMessage = "Error while registration.";
        }
     }
     else 
     {
        $errorMessage = "Password doesn't match with confirm password";
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
<a href="../Controller/login.php">Go Back</a><br>
</div>
<h1>Registration form</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="reg" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend>Basic Information</legend>
    <label for="fname">Enter your First name:</label>
    <input type="text" id="fname" name="fname" placeholder="Write here">
    <span id="fnameErr"></span>
    <?php echo $fnameErr; ?>  <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname" placeholder="Write here">
    <span id="lnameErr"></span>
    <?php echo $lnameErr; ?>  <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender"value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender"value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender"value="Others">
    <label for="Others">Others</label>
    <br>
    <span id="genderErr"></span>
    <?php echo $genderErr; ?><br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span id="dobErr"></span>
    <?php echo "&nbsp;&nbsp;".$dobErr; ?><br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option>Select Religion</option>
    <option value="islam">islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    </select>
    <span id="religionErr"></span>
    <?php echo $religionErr; ?><br><br>   
    </fieldset>
    <fieldset>
    <legend>Contact Information</legend>
    <label for="Preaddress">Enter your Present Address:</label>
    <textarea name="Preaddress" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="PreaddressErr"></span>
    <?php echo $PreaddressErr; ?><br><br>
    <label for="Peraddress">Enter your Permanent Address:</label>
    <textarea name="Peraddress" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="PeraddressErr"></span>
    <?php echo $PeraddressErr; ?><br><br>
    <label for="phone">Enter your Phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Write here">
    <span id="phoneErr"></span>
    <?php echo $phoneErr; ?><br><br>
    <label for="email">Enter your Email:</label>
    <input type="text" id="email" name="email" placeholder="Write here">
    <span id="emailErr"></span>
    <?php echo $emailErr; ?><br><br>
    </fieldset>
    <fieldset>
    <legend>Credentials</legend>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username"placeholder="Write here">
    <span id="usernameErr"></span>
    <?php echo $usernameErr; ?><br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password"placeholder="Write here">
    <span id="passwordErr"></span>
    <?php echo $passwordErr; ?><br><br>
    <label for="cpassword">Enter your Confirm Password:</label>
    <input type="password" id="cpassword" name="cpassword"placeholder="Write here">
    <span id="cpasswordErr"></span>
    <?php echo $cpasswordErr; ?><br>
  </fieldset>
   <?php echo "<b>".$errorMessage."</b>"; ?>
  <br><input type="submit" value="Submit" class="sub"><br><br>
</form>
</body>
</html>