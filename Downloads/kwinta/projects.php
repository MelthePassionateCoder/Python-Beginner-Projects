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
	
	
	$sql = mysqli_query($con,"SELECT * FROM kwintador.projects");
    $productCount = mysqli_num_rows($sql); 
	
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
          <button type="button" class="btn btn-primary"><a href="newproject.php" style="color:white;">Click Here to Create a New Project</a></button>
  <table class="table table-bordered" style="margin-top:10px;">
    <thead>
      <tr>
        <th>Name of the Project</th>
        <th>Starting Date</th>
        <th>Ending Date</th>
          <th>Total Cost</th>
          <th>Transaction</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <?php 
    
    while($rows=mysqli_fetch_array($sql))
{   $nameoftheproject=$rows['projectname'];
    $projectstartdate=$rows['projectsdate'];
    $projectenddate=$rows['projectedate'];
    
   
 
 

?>
        <td><?php echo $nameoftheproject; ?></td>
        <td><?php echo $projectstartdate; ?></td>
        <td><?php echo $projectenddate; ?></td>
          <td></td>
          <td><button type="button" class="btn btn-success">View Details</button><br><button type="button" class="btn btn-danger" style="margin-top:10px;">Delete</button></td> <?php } ?>
      </tr>
      
      
    </tbody>
  </table>
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
