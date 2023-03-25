<?php
include "../scripts/connectmysql.php";
$con = OpenCon();
$select1 = "SELECT * FROM phdoer_doer.skilledworkers WHERE worker_id='".$_GET['del_id']."' LIMIT 1";
$query = mysqli_query($con, $select1) or die($select);
$imgrow=mysqli_fetch_array($query);
unlink("uploads/".$imgrow['image']);

$select ="DELETE FROM phdoer_doer.skilledworkers WHERE worker_id='".$_GET['del_id']."' LIMIT 1";
$query = mysqli_query($con, $select) or die($select);
header ("Location: view.php");
?>