<?php
    include 'Connection.php';

    function reg($fname, $lname, $gender, $dob,$religion, $Preaddress, $Peraddress, $phone,$email, $username, $password)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO USER (fname,lname,gender,dob,religion,Preaddress,Peraddress,phone,email,username,password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("sssssssssss",$fname, $lname, $gender, $dob,$religion, $Preaddress, $Peraddress, $phone,$email, $username, $password);
     return $stmt->execute();

    }
?>