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
    <title>KWINTADOR</title>
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
        
      <div class="container">
  <h2 style="color:darkgreen;">My Project</h2> 
          <form role="form" method="post" action="method1.php" onsubmit="return checkForm(this);">
              <div class="modal-body">
            
				
				 
                   <fieldset>
					      
							<div class="form-group" style="width:200px;"><label for="usr">Name of the Project:</label>
                            <input class="form-control" placeholder="Enter name of the project" name="projectname"type="text" required >
							</div>
                       
							
							<div class="form-group" style="width:200px;">
                                <label for="usr">Starting Date:</label> <input class="form-control" type="date" name="startingdate">
							</div>
                       <div class="form-group" style="width:200px;">
                                <label for="usr">Ending Date:</label> <input class="form-control" type="date" name="endingdate">
							</div>
                       <div class="form-group" style="width:200px;" ><label for="usr">Plinth Area/Slab Area</label><h6>Area of land on which Construction to be takes place</h6>
                                <input class="form-control" placeholder="DIGIT ONLY" name="area" type="text" required>
							</div><div class="form-group" style="width:200px;" ><label for="usr">Number of Floors to be Constructed Including Basement</label><select style="width:200px;" name="floors">
  <option value=""></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                    <option value="4">4</option>
                        <option value="4">5</option>
</select>
							</div>
                       <div class="form-group" style="width:200px;" ><label for="usr">Parking</label><select style="width:200px;" name="typeparking">
  <option value=""></option>
  <option value="1">No</option>
  <option value="2">Single Car Parking</option>
  <option value="3">Basement Car Parking</option>
</select>
                       </div>
                       <h4>Materials Selection</h4>
                       <div class="form-group" style="width:200px;" ><label for="usr">Cements</label><select style="width:200px;" name="cements">
  <option value=""></option>
  <option value="1">Economical</option>
  <option value="2">Economy Plus</option>
  <option value="3">Premium</option>
</select>
                       </div>
                       <div class="form-group" style="width:200px;" ><label for="usr">Steels</label><select style="width:200px;" name="steels">
  <option value=""></option>
  <option value="1">Economical</option>
  <option value="2">Economy Plus</option>
  <option value="3">Premium</option>
</select>
                       </div>
                       <div class="form-group" style="width:200px;" ><label for="usr">Bricks</label><select style="width:200px;" name="bricks">
  <option value=""></option>
  <option value="1">Red Clay Bricks</option>
  <option value="2">Fly Ash Bricks</option>
  <option value="3">AAC Blocks</option>
</select>
                       </div>
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer" style="width:350px;">
               <input type="submit" class="btn btn-md button1 btn-block" name="done" style="color:white;background-color:green;" value="Done">
              </div>
                    </form>
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
