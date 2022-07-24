<?php

    function connect()
    {
    $conn = new mysqli("localhost","subha","1234","officer");
    if($conn->connect_errno)
    {
        die("Connection failed due to ".$conn->connect_error);
    }
    return $conn;
    }

?>