<?php
session_start();
if(isset($_SESSION["manager"])){
    header("location: index.php");
    exit();
}
?>
<?php
if(isset($_POST["admin_username"]) && isset($_POST["admin_password"]))
{
    $manager=preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_username"]);
    $password = preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_password"]);
   // $password=base64_encode($pass);
include "scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con, "SELECT admin_id FROM phdoer_doer.admin WHERE admin_username='$manager' AND admin_password='$password' LIMIT 1");

$existCount = mysqli_num_rows($sql);
if($existCount == 1)
{
    while($row= mysqli_fetch_array($sql))
    {
        $id = $row["admin_id"];
    }
    
    $_SESSION["id"]= $id;
     $_SESSION["manager"]= $manager;
     $_SESSION["password"]= $password;
    header("location: main.php");
    //echo 'WELCOME MANAGER <a href="index.php">CLICK HERE TO CONTINUE</a>';
    exit();
    
} else
{
    echo "<script>alert('Incorrect Data!')</script>";
    header('location:loginform.php?pid='.$manager);
   
    
}
}
?>

