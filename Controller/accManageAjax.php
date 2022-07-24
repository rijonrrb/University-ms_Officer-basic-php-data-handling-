<?php
include '../Model/dbaccManage.php';
$id = $status = $description = "";  
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["id"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["status"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["description"])) 
    {  
        echo "*This field can't be empty";
        $flag = True;  
    } 
    if(!$flag) 
    {

     $id = input_data($_POST["id"]);
     $status = input_data($_POST["status"]);
     $description = input_data($_POST["description"]);

        $courseAdd = courseAdd($id, $status, $description);
        if($courseAdd) {
        echo "<h3>" ."Successfully added in database"."<h3>";
        }
        else {
        echo "Error while buying.";
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