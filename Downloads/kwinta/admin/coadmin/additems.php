<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
include "scripts/connectmysql.php";
$con=OpenCon();
if(isset($_POST['item_save']))
{

$username = mysqli_real_escape_string($con,$_POST['worker_username']);
		$firstname = mysqli_real_escape_string($con,$_POST['worker_fname']);
		$lastname = mysqli_real_escape_string($con,$_POST['worker_lname']);
		$skills = mysqli_real_escape_string($con,$_POST['worker_skills']);
		$email = mysqli_real_escape_string($con,$_POST['worker_email']);
		$contactnumber = mysqli_real_escape_string($con,$_POST['worker_contactnumber']);
		$address = mysqli_real_escape_string($con,$_POST['worker_address']);
		$description = mysqli_real_escape_string($con,$_POST['worker_description']);
        $description1 = mysqli_real_escape_string($con,$_POST['worker_description1']);
 $check_item="select * from phdoer_doer.skilledworkers WHERE worker_username='$username'";
    $run_query=mysqli_query($con,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Username is already exist, Please try another one!')</script>";
 echo"<script>window.open('main.php','_self')</script>";
exit();
    }
 
$imgFile = $_FILES['item_image']['name'];
$tmp_dir = $_FILES['item_image']['tmp_name'];
$imgSize = $_FILES['item_image']['size'];

$upload_dir = 'pictures/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt;


				
	
			if(in_array($imgExt, $valid_extensions)){			
		
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
					$saveitem="INSERT INTO phdoer_doer.skilledworkers(worker_username,worker_fname,worker_lname,worker_skills,worker_email,worker_contactnumber,worker_address,worker_description,worker_desc,image,date_added) 
		VALUES('$username','$firstname','$lastname','$skills','$email','$contactnumber','$address','$description','$description1','$itempic',now())";
					mysqli_query($con,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('view.php','_self')</script>";
				}
				else{
					
					 echo "<script>alert('Sorry, your file is too large.')</script>";				
					 echo "<script>window.open('view.php','_self')</script>";
				}
			}
			else{
				
				 echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";				
					 echo "<script>window.open('view.php','_self')</script>";
				
			}
		
	
		

}

?>









