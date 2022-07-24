<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Account Management</title>
<script src="../View/js/accManage.js"></script>
<link rel="stylesheet" href="../View/css/accManage.css"></link>
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
<h1>Account Management</h1>
<form method="POST" name ="acc" onsubmit="add(this); return false; "novalidate enctype="application/x-www-form-urlencoded">
    <fieldset>
    <legend>Course Information</legend>
    <label for="id">Enter Acoount Id:</label>
    <input type="text" id="id" name="id" placeholder="Write here">
    <span id="idErr"></span>
    <br><br>
    <label for="status">Select Account Condition:</label>
    <select name="status" id="status">
    <option></option>
    <option value="Appropriate">Appropriate</option>
    <option value="Inappropriate">Inappropriate</option>
    </select>
    <span id="statusErr"></span>
    <br><br>
    <label for="description">Enter Brief About Account Condition:</label>
    <textarea name="description" rows="3" cols="40" placeholder="Write here"></textarea>
    <span id="descriptionErr"></span>
    <br><br>
    </fieldset>
  <br><input type="submit" value="Submit" class="sub">&nbsp;&nbsp;&nbsp;&nbsp; <button onClick="window.location.reload();"  class="sub">Clear</button>
  <div id="accManage"></div>
 </form>
</body>
</html>