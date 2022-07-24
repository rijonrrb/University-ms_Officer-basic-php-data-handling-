<?php
    include 'Connection.php';
    function courseAdd($id, $status, $description)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO ACCMANAGE (id, status, description) VALUES(?, ?, ?)");
     $stmt->bind_param("sss",$id, $status, $description);
     return $stmt->execute();

    }

?>