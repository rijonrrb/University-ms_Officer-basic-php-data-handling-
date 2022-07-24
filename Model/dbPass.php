<?php
    include 'Connection.php';

    
    function Pass($newpassword, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE USER SET password = ? WHERE  username = ?");
    $stmt->bind_param("ss",$newpassword,$username);
     return $stmt->execute();
    }

    
    function oldpass($username)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT password FROM USER WHERE username = ?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }

?>