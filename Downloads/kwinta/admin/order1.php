<?php
session_start();
if(!isset($_SESSION["manager"])){
    header("location: index.php");
    exit();
}

$managerID = preg_replace('#[^0-9]#i','',$_SESSION["id"]);
$manager = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["manager"]);
$password = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["password"]);

include "scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con,"SELECT * FROM phdoer_doer.admin WHERE admin_id='$managerID' AND admin_username='$manager' AND admin_password='$password' LIMIT 1");

$existCount =mysqli_num_rows($sql);
if($existCount==0)
{
    //echo "Your login session data is not on record in the database.";
    header("location: index.php");
    exit();
}
?>
<?php 
if(isset($_GET['pid']))
{
    $targetID = $_GET['pid'];
    $status1 = 'Confirmed';
    $runquery = mysqli_query($con, "UPDATE phdoer_doer.orderdetails SET statuses='$status1' WHERE order_id='$targetID'");
    if($runquery)
    {
        $run1 = mysqli_query($con,"SELECT * FROM phdoer_doer.orderdetails WHERE order_id='$targetID'");
        if($run1)
        {
            while($rows=mysqli_fetch_array($run1))
            {
                $worker_id = $rows['worker_id'];
                $userid = $rows['userid'];
            }
            $status2 = 'Review';
            $run2 = "INSERT INTO phdoer_doer.review(worker_id,userid,order_id,comments,statuses1,nametouse,confirmation) VALUES('$worker_id','$userid','$targetID','','$status2','','')";
            $run3 = mysqli_query($con,$run2);
        }
    }
    
}
?>