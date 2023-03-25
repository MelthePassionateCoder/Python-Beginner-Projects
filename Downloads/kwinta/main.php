<?php
session_start();
if(!isset($_SESSION["manager"])){
    header("location: index.php");
    exit();
}

$managerID = preg_replace('#[^0-9]#i','',$_SESSION["id"]);
$manager = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["manager"]);
$password = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["password"]);

include "admin/scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con,"SELECT * FROM kwintador.client WHERE clientid='$managerID' AND clientusername='$manager' AND clientpassword='$password' LIMIT 1");

$existCount =mysqli_num_rows($sql);
if($existCount==0)
{
    echo "<script>alert('Your login session is not on our database!')</script>";
    header("location: index.php");
    exit();
}
$rows1=mysqli_fetch_array($sql);
?>
<?php
	
	
	$sql = mysqli_query($con,"SELECT * FROM phdoer_doer.skilledworkers WHERE 1");
	$skills1="Housekeeper";
    $skills2="Electrician";
    $skills3="Plumbing";
    $skills4="Lawnmowing";
    $skills5="Gadgetrepair";
    $skills6="Carpenter";

    
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOER</title>
	 <link rel="shortcut icon" href="assets/img/doer.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="boot/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="boot/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/bootstrap-theme.css">
    <link href="boot/css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="boot/css/animate.css">
    <link rel="stylesheet" href="boot/css/style.css">
    <link rel="stylesheet" href="boot/css/font-awesome.min.css">
    <link rel="stylesheet" href="boot/skin/default.css">

   
    
</head>
<body>
    <div id="wrapper">
        <?php include_once("layout_head.php"); ?><div id="page-wrapper">
 <div class="container" align="center"> 
 <center> 
                <h1> ANNOUNCEMENTS</h1>
                <textarea rows="5" cols="90" placeholder="What's on your mind today?..."></textarea>
                <br>
            <button class="button1 btn-md" align="center" style="margin-bottom:10px;"><a class="btn button1" style="color:white;font:Calibri;">Share Your Opinion</a></button> 
                </center> 
      
           
</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php include_once("layout_foot.php"); ?>
            
                </div>
            </div>
<?php include_once('accountsettings.php'); ?><script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
