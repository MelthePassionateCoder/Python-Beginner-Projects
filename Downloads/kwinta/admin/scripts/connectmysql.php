<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    
    $con = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed");
    return $con;

}

function CloseCon($con)
{
    $con -> close();
}
?>