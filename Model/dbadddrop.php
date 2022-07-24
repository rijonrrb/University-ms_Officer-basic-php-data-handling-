<?php
    include 'Connection.php';
    function addDrop($studentId, $courseName, $courseID, $adddrop)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO ADDDROP (studentId, courseName, courseID, adddrop) VALUES(?, ?, ?, ?)");
     $stmt->bind_param("ssss",$studentId, $courseName, $courseID, $adddrop);
     return $stmt->execute();

    }

?>