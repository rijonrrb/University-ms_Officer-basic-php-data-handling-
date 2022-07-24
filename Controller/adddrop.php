<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Adding/Dropping</title>
<script src="../View/js/addrop.js"></script>
<link rel="stylesheet" href="../View/css/adddrop.css"></link>
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
<h1>Adding/Dropping</h1>
<form method="POST" name ="registration" onsubmit="add(this); return false; "novalidate enctype="application/x-www-form-urlencoded">
    <fieldset>
    <label for="studentId">Enter Student ID:</label>
    <input type="text" id="studentId" Name="studentId" placeholder="Write here">
    <span id="studentIdErr"></span> 
    <br><br>
    <label for="courseName">Enter Course Name:</label>
    <input type="text" id="courseName" Name="courseName" placeholder="Write here">
    <span id="courseNameErr"></span>
    <br><br>
    <label for="courseID">Enter Course Code:</label>
    <input type="text" id="courseID" Name="courseID" placeholder="Write here">
    <span id="courseIDErr"></span>
    <br><br>
    <label for="adddrop">Choose Adding or Dropping:</label>
    <select name="adddrop" id="adddrop">
    <option></option>
    <option value="Add">Add</option>
    <option value="Drop">Drop</option>
    </select>
    <span id="adddropErr"></span>
    <br><br>
    <label for="checkbox">Please Confirm Adding/Dropping:</label>
    <input type="checkbox" id="checkbox" name="checkbox" value="Confirm">
    </fieldset>
  <br><input type="submit" value="Submit" class="sub">&nbsp;&nbsp;&nbsp; <button onClick="window.location.reload();"  class="sub">Clear</button>
   <br>
 <div id="course"></div>
 </form>
</body>
</html>