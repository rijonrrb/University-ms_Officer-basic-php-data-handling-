<?php
include '../Model/dbadddrop.php';
$studentId = $courseName = $courseID = $adddrop = $checkbox = "";  
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["studentId"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["courseName"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["courseID"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["adddrop"])) 
    {  
        echo "*This field can't be empty";
        $flag = True;  
    } 

    if(!$flag) 
    {

     $studentId = input_data($_POST["studentId"]);
     $courseName = input_data($_POST["courseName"]);
     $courseID = input_data($_POST["courseID"]);
     $adddrop = input_data($_POST["adddrop"]);
     $checkbox = input_data($_POST["checkbox"]);
          
     if($checkbox == "Confirm")  
     {
        $addDrop = addDrop($studentId, $courseName, $courseID, $adddrop);
        if($addDrop) {
        echo "<h3>" ."Successfully added in database"."<h3>";
        }
        else {
        echo "Error while buying.";
        }
     }
     else 
     {
        echo "Checkbox doesn't check";
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