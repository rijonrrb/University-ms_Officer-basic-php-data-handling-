<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
<link rel="stylesheet" href="../View/css/Home.css"></link>
</head>
<body>

<div id="heading">
<?php 
include '../View/header.php';
?>
</div>
<?php	
    $username = "";
    if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

unset($_COOKIE["username"]);
session_unset();
session_destroy();

header("location:../Controller/login.php");

}
	
?>

<?php 
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>
<br><br>
<fieldset>
<ul>
<li><a href="../Controller/UpdateProfile.php"class="sub">Profile Edit</a></li><br><br>
<li><a href="../Controller/ChangePassword.php"class="sub">Change password</a></li><br><br>
<li><a href="../Controller/addCourse.php"class="sub">Course Adding</a></li><br><br>
<li><a href="../Controller/adddrop.php"class="sub">Adding/Dropping Management</a></li><br><br>
<li><a href="../Controller/infoFaculty.php"class="sub">Information Of Faculty</a></li><br><br>
<li><a href="../Controller/upprofFaculty.php"class="sub">Fixing Faculty Information</a></li><br><br>
<li><a href="../Controller/infoStudent.php"class="sub">Information Of Student</a></li><br><br>
<li><a href="../Controller/upprofStudent.php"class="sub">Fixing Student Information</a></li><br><br>
<li><a href="../Controller/accManage.php"class="sub">Account Management</a></li><br><br>
</ul>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <input type="submit" value="Logout"class="sub">
</form>
</fieldset>
<br>
<br>
<div id="ft">
<?php 
include '../View/footer.html';
?>
</div>
</body>
</html>
