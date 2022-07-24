<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Course Adding</title>
<script src="../View/js/addcourse.js"></script>
<link rel="stylesheet" href="../View/css/addCourse.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>


    
<div id="heading">
<a href="../View/Index.php">Go Back</a><br>
</div>
<h1>Course Adding</h1>
<form method="POST" name ="registration" onsubmit="add(this); return false; "novalidate enctype="application/x-www-form-urlencoded">
    <fieldset>
    <legend>Course Information</legend>
    <label for="ccode">Enter Course Code:</label>
    <input type="text" id="ccode" name="ccode" placeholder="Write here">
    <span id="ccodeErr"></span>
    <br><br>
    <label for="cname">Enter Course Name:</label>
    <input type="text" id="cname" name="cname" placeholder="Write here">
    <span id="cnameErr"></span>
    <br><br>
    <label for="cdescription">Enter Course Description:</label>
    <textarea name="cdescription" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="cdescriptionErr"></span>
    <br><br>
    <label for="ccredit">Enter Course Credit:</label>
    <input type="text" id="ccredit" name="ccredit" placeholder="Write here">
    <span id="ccreditErr"></span>
    <br><br>
    </fieldset>
  <br><input type="submit" value="Submit" class="sub">&nbsp;&nbsp;&nbsp;&nbsp; <button onClick="window.location.reload();"  class="sub">Clear</button>
   <br>
<div id="course"></div>
 </form>
</body>
</html>