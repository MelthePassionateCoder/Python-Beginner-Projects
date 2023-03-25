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
   $targetID=$_GET['pid'];
    $query = "SELECT * FROM phdoer_doer.coadmin WHERE coadmin_id='$targetID'";
    $run = mysqli_query($con,$query);
    while($rows=mysqli_fetch_array($run))
    {
        $username = $rows['coadmin_username'];
        $fullname =$rows['coadmin_name'];
        $address = $rows['coadmin_address'];
        $email = $rows['coadmin_email'];
        $contactnum = $rows['coadmin_contactnum'];
        $code=$rows['coadmin_code'];
    }
}
?>
<?php 
if(isset($_POST['btn_save_updates']))
	{
		$username = $_POST['coadmin_username'];
		$fullname = $_POST['coadmin_fullname'];
		$address = $_POST['coadmin_address'];
		$email = $_POST['coadmin_email'];
		$contactnumber = $_POST['coadmin_contactnumber'];
		$code = $_POST['coadmin_code'];
    $sql1 = "UPDATE phdoer_doer.coadmin SET coadmin_username='$username',coadmin_name='$fullname',coadmin_address='$address',coadmin_email='$email',coadmin_contactnum='$contactnumber',coadmin_code='$code' WHERE coadmin_id=". $_GET['pid'];
		$res = mysqli_query($con, $sql1);
				
			if($res){
				
                echo "<script>
				alert('Successfully Updated ...');
				window.location.href='coadmin.php';
				</script>";

			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
				 echo "<script>alert('Sorry Data Could Not Updated !')</script>";				
			}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDGE Skateshop</title>
	 <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <?php include_once("layout_head.php"); ?> <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
		<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
			 <div class="alert alert-info">
                        
                          <center> <h3><strong>Update Coadmin Form
                              </strong> </h3></center>
						  
						  </div>
						  
						 <table class="table table-bordered table-responsive">
	 
    <tr>
    	<td><label class="control-label">Username</label></td>
        <td><input type="text" class="form-control" id="coadmin_username" name="coadmin_username" value="<?php echo $username; ?>" REQUIRED></td>
    </tr>
	
	 <tr>
    	<td><label class="control-label">Full Name</label></td>
        <td><input type="text" class="form-control form-control-user" id="coadmin_fullname" name="coadmin_fullname" value="<?php echo $fullname; ?>" REQUIRED></td>
    </tr>
     <tr>
    	<td><label class="control-label">Address</label></td>
        <td><input type="text" class="form-control form-control-user" id="coadmin_address" name="coadmin_address" value="<?php echo $address; ?>" REQUIRED></td>
    </tr>
     <tr>
    	<td><label class="control-label">Email</label></td>
        <td><input type="text" class="form-control form-control-user" id="coadmin_email" name="coadmin_email" value="<?php echo $email; ?>"></td>
    </tr>
	<tr>
    	<td><label class="control-label">Contact Number</label></td>
        <td><input type="text" class="form-control form-control-user" id="coadmin_contactnumber" name="coadmin_contactnumber" value="<?php echo $contactnum; ?>" REQUIRED></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Code</label></td>
        <td><input type="text" class="form-control form-control-user" id="coadmin_code" name="coadmin_code" value="<?php echo $code; ?>" REQUIRED></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-danger" href="view.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
						  

	 
	 <div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy 2016 EDGE Skateshop| All Rights Reserved |  Design by : EDGE Team

						</p>
                        
                    </div>		  
						  
						  
			
			
            
                </div>
            </div>

           

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
