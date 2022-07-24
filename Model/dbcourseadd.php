<?php
    include 'Connection.php';
    function courseAdd($ccode, $cname, $cdescription, $ccredit)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO COURSE (ccode, cname, cdescription, ccredit) VALUES(?, ?, ?, ?)");
     $stmt->bind_param("ssss",$ccode, $cname, $cdescription, $ccredit);
     return $stmt->execute();

    }

?>