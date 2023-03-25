<?php
session_start();
if(isset($_SESSION["user"])){
    header("location: index.php");
    exit();
}
?>
<?php
if(isset($_POST["user_login"]))
{
    $manager=preg_replace('#[^A-Za-z0-9]#i','',$_POST["username"]);
    $password = preg_replace('#[^A-Za-z0-9]#i','',$_POST["userpassword"]);
   // $password=base64_encode($pass);
include "admin/scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con, "SELECT clientid FROM kwintador.client WHERE clientusername='$manager' AND clientpassword='$password' LIMIT 1");

$existCount = mysqli_num_rows($sql);
if($existCount == 1)
{
    while($row= mysqli_fetch_array($sql))
    {
        $id = $row["clientid"];
    }
    
    $_SESSION["id"]= $id;
     $_SESSION["manager"]= $manager;
     $_SESSION["password"]= $password;
    header("location: main.php");
    
    exit();
    
} else
{
    echo "<script>alert('Username/Password is incorrect!')</script>";
    echo "<script>window.open('login.php?pid=$manager','_self')</script>";
    
}
}
?>