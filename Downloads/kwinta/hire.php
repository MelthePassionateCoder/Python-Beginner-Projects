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
    //echo "Your login session data is not on record in the database.";
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
<style>
    .topnav {
  background-color: green;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: center;
    font:30px Calibri;
display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: black;
  color: white;
}

/* Add an active class to highlight the current page */
.active {
  background-color: darkgreen;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
    </style>
  
    
</head>
<body>
    <div id="wrapper">
        <?php include_once("layout_head.php"); ?>
        <div id="page-wrapper">
        
      <div class="topnav" align="center">
  <a href="hire.php" class="active">Step 1</a>
 <a href="workers.php">Step 2</a>
 <a href="#home">Step 3</a>
  <a href="#home">Step 4</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
       
    

      

      <div class="container" style="padding:0px;margin-bottom:0px;margin-top:0px;">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 class="header-line" style="font:bold 30px Calibri; color:green">Choose a service</h1>
                 </div></div><div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="assets/img/broom1.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Housekeeping</h4>
                      <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn button1 btn-lg " required="required" style="color:white;border-radius:30px;padding:10px;font:15px Calibri;"><?php $skills1; echo"<a href='workers.php?pid=$skills1' style='color:white;'>Hire Now</a>"; ?></button> 
                  </div>
                   <p style="font:16px Calibri;color:black;">
                       Perform a variety of cleaning activities such as sweeping, mopping, dusting and polishing. Ensure all rooms are cared for and inspected according to standards.
                   </p>
				   </center>
              
                </div>
                   </div>
                   <div class="col-lg-3  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="assets/img/elec.jpg" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Electrical Services</h4>
                      <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn button1 btn-lg" required="required" style="color:white;border-radius:30px;padding:10px;font:15px Calibri;"><?php $skills2; echo"<a href='workers.php?pid=$skills2' style='color:white;'>Hire Now</a>"; ?></button>
                  </div>
                   <p style="font:16px Calibri;color:black;">Electricians install and maintain electrical power, communications, lighting, and control systems in homes. Inspect electrical components, such as transformers and breakers.</p>
				   </center></div>
                   </div>
				   
				   
				    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="assets/img/plumber.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Plumbing</h4>
               <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn button1 btn-lg" required="required" style="color:white;border-radius:30px;padding:10px;font:15px Calibri;"><?php $skills3; echo"<a href='workers.php?pid=$skills3' style='color:white;'>Hire Now</a>"; ?></button>
                  </div>
                   <p style="font:16px Calibri;color:black;">Installs, maintains, and repairs pipes and fixtures associated with heating, cooling, water distribution, and sanitation systems. Inspects drainage and plumbing systems for compliance with local and national regulations.
                   </p>
				   </center></div>
                   </div></div>
             </div>
             <div class="container" style="padding:0px;margin-top:0px;">
       <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="assets/img/Mower.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Lawn Mowing</h4>
                      <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn button1 btn-lg" required="required" style="color:white;border-radius:30px;padding:10px;font:15px Calibri;"><?php $skills4; echo"<a href='workers.php?pid=$skills4' style='color:white;'>Hire Now</a>"; ?></button>
                  </div>
                     <p style="font:16px Calibri;color:black;">Plawn care worker job description. Lawn care workers complete a variety of landscaping duties, such as maintaining lawns, trimming trees, applying pesticides, planting flowers and grass, installing irrigation systems, and edging around flower beds.</p></center>
            </div>
                   </div>
       <div class="col-lg-3  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s"><div class="about-div">
                  <center>  <img class="img img-circle" src="assets/img/gadget.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Gadget Repair</h4>
                      <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn button1 btn-lg" required="required" style="color:white;border-radius:30px;padding:10px;font:15px Calibri;"><?php $skills5; echo"<a href='workers.php?pid=$skills5' style='color:white;'>Hire Now</a>"; ?></button>
                  </div>
                   <p style="font:16px Calibri;color:black;">
                       Cell phone technicians are responsible for repairing cell phones which have malfunctioned and restore them to good operating condition. Knowledge of the hardware and software of various cell phone models is important in this position, and the ability to read blueprints and manuals is also necessary.
                   </p>
				   </center>
              
                </div>
                   </div><div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="assets/img/carpen.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;" href="#ln" href="#brand-sec" data-toggle="modal">Carpentry</h4>
                      <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn button1 btn-lg" required="required" style="color:white;border-radius:30px;padding:10px;font:15px Calibri;"><?php $skills6; echo"<a href='workers.php?pid=$skills6' style='color:white;'>Hire Now</a>"; ?></button>
                  </div>
                   <p style="font:16px Calibri;color:black;">
                       Carpenters construct and repair building frameworks and structures such as stairways, doorframes, partitions, and rafters made from wood and other materials. They also may install kitchen cabinets, siding and drywall.
                   </p>
				   </center>
              
                </div>
                   </div>
    </div>
      </div>
    
 
        <br>
    <?php include_once("layout_foot.php"); ?>
            
                </div>
            
<?php include_once("accountsettings.php"); ?>
   
	  	  <script>
   
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
