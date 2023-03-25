
<?php
include("scripts/connectmysql.php");
$con=OpenCon();
if(isset($_POST['register']))
{
$username = $_POST['adminusername'];
$fullname= $_POST['admincompletename'];
$address= $_POST['adminaddress'];
$email = $_POST['adminemail'];
$contactnum = $_POST['adminnumber'];
$pass = $_POST['pass1'];
$password = base64_encode($pass);

$check_user="select * from doer.coadmin WHERE adminusername='$username' AND adminemail ='$email'";

$run_query=mysqli_query($con,$check_user);
if(mysqli_num_rows($run_query) >0)
    {
echo "<script>alert('Admin is already exist, Please try another one!')</script>";
    }

else{
    $checkuser="SELECT * FROM doer.admin WHERE admin_username='$username'";
    $runquery=mysqli_query($con,$checkuser);
    if(mysqli_num_rows($runquery) == 0)
    {
        $saveaccount="insert into doer.coadmin (adminusername,admincompletename,adminaddress,adminemail,adminnumber,adminpassword) VALUE ('$username','$fullname','$address','$email','$contactnum','$password')";
mysqli_query($con,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";
    }
    else
    {
        echo '<script type="text/javascript">
alert("Sorry, there is no download available for this product! Please contact support.");
window.close();
</script>';
exit;
    }
				

    }


				
	
			
		
	
		

}

?>
