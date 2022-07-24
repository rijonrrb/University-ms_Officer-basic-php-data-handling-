<?php
include '../Model/dbcourseadd.php';
$ccode = $cname = $cdescription = $ccredit = "";  
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["ccode"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["cname"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["cdescription"])) 
    {  
        echo "*This field can't be empty";
        $flag = True;  
    } 
    if (empty($_POST["ccredit"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }  
    if(!$flag) 
    {

     $ccode = input_data($_POST["ccode"]);
     $cname = input_data($_POST["cname"]);
     $cdescription = input_data($_POST["cdescription"]);
     $ccredit = input_data($_POST["ccredit"]);

        $courseAdd = courseAdd($ccode, $cname, $cdescription, $ccredit);
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