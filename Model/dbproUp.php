<?php
    include 'Connection.php';

    
    function proUP($fname, $lname, $gender, $dob,$religion, $Preaddress, $Peraddress, $phone,$email, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE USER SET fname = ?, lname= ?, gender= ?, dob= ?, religion= ?, Preaddress= ?, Peraddress= ?, phone= ? , email= ? WHERE username = ?");
    $stmt->bind_param("ssssssssss",$fname, $lname, $gender, $dob,$religion, $Preaddress, $Peraddress, $phone,$email, $username);
     return $stmt->execute();
    }

?>