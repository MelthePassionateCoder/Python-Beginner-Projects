<?php
session_start();
if(!isset($_SESSION["manager"])){
    header("location: index.php");
    exit();
}

$managerID = preg_replace('#[^0-9]#i','',$_SESSION["id"]);
$manager = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["manager"]);
$password = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["password"]);

include "../scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con,"SELECT * FROM phdoer_doer.coadmin WHERE coadmin_id='$managerID' AND coadmin_username='$manager' AND coadmin_password='$password' LIMIT 1");

$existCount =mysqli_num_rows($sql);
if($existCount==0)
{
    //echo "Your login session data is not on record in the database.";
    header("location: index.php");
    exit();
}
?>

<?php

	error_reporting( ~E_NOTICE );
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt=mysqli_query($con,"SELECT * FROM phdoer_doer.skilledworkers WHERE worker_id ='$id'");
		$rows=mysqli_fetch_array($stmt);
	}
	else
	{
		header("Location: items.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$username = $_POST['worker_username'];
		$firstname = $_POST['worker_fname'];
		$lastname = $_POST['worker_lname'];
		$skills = $_POST['worker_skills'];
		$email = $_POST['worker_email'];
		$contactnumber = $_POST['worker_contactnumber'];
		$address = $_POST['worker_address'];
		$description = $_POST['worker_description'];
		$desc = $_POST['worker_description1'];
			
		$imgFile = $_FILES['item_image']['name'];
		$tmp_dir = $_FILES['item_image']['tmp_name'];
		$imgSize = $_FILES['item_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = '../pictures/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$itempic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['item_image']);
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
					echo "<script>alert('Sorry, your file is too large it should be less then 5MB')</script>";				
					 
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
              echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";					
			}	
		}
		else
		{
		
			$itempic = $rows['image']; 
		}	
						
		

		if(!isset($errMSG))
		{
			$sql1 = "UPDATE phdoer_doer.skilledworkers SET worker_username='$username',worker_fname='$firstname',worker_lname='$lastname',worker_skills='$skills',worker_email='$email',worker_contactnumber='$contactnumber',worker_address='$address',worker_description='$description',worker_desc='$desc',image='$itempic' WHERE worker_id=". $_GET['edit_id'];
		$res = mysqli_query($con, $sql1);
				
			if($res){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='view.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
				 echo "<script>alert('Sorry Data Could Not Updated !')</script>";				
			}
		
		}
		
						
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDGE Skateshop</title>
	 <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/local.css" />

    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <?php include_once("layout_head.php"); ?> <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
		<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
			 <div class="alert alert-info">
                        
                          <center> <h3><strong>Update Worker Form</strong> </h3></center>
						  
						  </div>
						  
						 <table class="table table-bordered table-responsive">
	 
    <tr>
    	<td><label class="control-label">Username</label></td>
        <td><input type="text" class="form-control" id="worker_username" name="worker_username" value="<?php echo $rows['worker_username']; ?>" REQUIRED></td>
    </tr>
	
	 <tr>
    	<td><label class="control-label">First Name</label></td>
        <td><input type="text" class="form-control form-control-user" id="worker_fname" name="worker_fname" value="<?php echo $rows['worker_fname']; ?>" REQUIRED></td>
    </tr>
     <tr>
    	<td><label class="control-label">Last Name</label></td>
        <td><input type="text" class="form-control form-control-user" id="worker_lname" name="worker_lname" value="<?php echo $rows['worker_lname']; ?>" REQUIRED></td>
    </tr>
     <tr>
    	<td><label class="control-label">Skills</label></td>
        <td><select id="worker_skills" name="worker_skills" class="form-control" value="<?php echo $rows['worker_skills']; ?>">
       <option>Carpenter</option>
          <option>Electrician</option>
          <option>Plumbing</option>
          <option>Housekeeper</option>
      </select></td>
    </tr>
	<tr>
    	<td><label class="control-label">Contact Number</label></td>
        <td><input type="text" class="form-control form-control-user" id="worker_contactnumber" name="worker_contactnumber" value="<?php echo $rows['worker_contactnumber']; ?>" REQUIRED></td>
    </tr>
    <tr>
    	<td><label class="control-label">Email</label></td>
        <td><input type="text" class="form-control form-control-user" id="worker_email" name="worker_email" value="<?php echo $rows['worker_email']; ?>"></td>
    </tr>
    <tr>
    	<td><label class="control-label">Address</label></td>
        <td><input type="text" class="form-control form-control-user" id="worker_address" name="worker_address" value="<?php echo $rows['worker_address']; ?>" REQUIRED></td>
    </tr>
    <tr>
    	<td><label class="control-label">Description</label></td>
        <td><div class="form-group">
  
  <textarea class="form-control" id="worker_description" name="worker_description" rows="3" value="<?php echo $rows['worker_description']; ?>" REQUIRED></textarea>
</div></td>
    </tr>
    <tr>
    	<td><label class="control-label">List of Certificates</label></td>
        <td><textarea class="form-control" id="worker_description1" name="worker_description1" rows="3" value="<?php echo $rows['worker_description']; ?>" REQUIRED></textarea></td>
    </tr>
	
    <tr>
    	<td><label class="control-label">Image.</label></td>
        <td>
        	<p><img class="img img-thumbnail" src="../pictures/<?php echo $rows['image']; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="item_image" accept="image/*" />
        </td>
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
