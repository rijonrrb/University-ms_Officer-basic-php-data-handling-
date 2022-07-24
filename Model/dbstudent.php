<?php
    include 'Connection.php';



    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM student");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }

?>