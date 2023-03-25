
<?php
if(isset($_POST["admin_username"]) && isset($_POST["admin_password"]) && isset($_POST["admin_code"]))
{
    $manager=preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_username"]);
    $pass = preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_password"]);
    $code = preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_code"]);
   $password=base64_encode($pass);
include "../scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con, "SELECT * FROM phdoer_doer.coadmin WHERE coadmin_username='$manager' AND coadmin_password='$password' AND coadmin_code='$code'");

$existCount = mysqli_num_rows($sql);
if($existCount == 1)
{
    while($row= mysqli_fetch_array($sql))
    {
        $id = $row["coadmin_id"];
    }
    session_start();
    $_SESSION["id"]= $id;
     $_SESSION["manager"]= $manager;
     $_SESSION["password"]= $password;
    $_SESSION["code"]=$code;
    header("location: main.php");
    //echo 'WELCOME MANAGER <a href="index.php">CLICK HERE TO CONTINUE</a>';
    exit();
    
} else
{
    echo "<script>alert('Incorrect Data!')</script>";
    header('location:signin.php?pid='.$manager);
   
    
}
}
?>

