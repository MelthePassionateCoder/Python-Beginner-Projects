<?php

include "connectmysql.php";
$con=OpenCon();

$sql = "INSERT INTO doer.admin (admin_username, admin_password)
VALUES ('Shenna', 'comptechdoer135'),('Alice','comptechdoer135')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}