<?php
    include 'Connection.php';

    
    function upfac($name, $address, $phone,$email, $dept, $position,$id)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE FACULTY SET name = ?, address= ?, phone= ?, email= ?, dept= ?, position= ? WHERE id = ?");
    $stmt->bind_param("sssssss", $name, $address, $phone,$email, $dept, $position,$id);
     return $stmt->execute();
    }

?>