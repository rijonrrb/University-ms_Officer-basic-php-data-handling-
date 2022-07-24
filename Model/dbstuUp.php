<?php
    include 'Connection.php';
    function upstu($name, $address, $phone,$credit, $course, $grade, $id)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE Student SET name = ?, address= ?, phone= ?, credit= ?, course= ?, grade= ? WHERE id = ?");
    $stmt->bind_param("sssssss", $name, $address, $phone,$credit, $course, $grade,$id);
     return $stmt->execute();
    }

?>