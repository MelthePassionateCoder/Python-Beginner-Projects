<?php
include("../scripts/connectmysql.php");
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
$status ='Pending';

$check_user="select * from phdoer_doer.coadmin WHERE coadmin_username='$username'";
$check = "select * from phdoer_doer.coadmin WHERE coadmin_email='$email'";
$run = mysqli_query($con,$check);
$run_query=mysqli_query($con,$check_user);
if(mysqli_num_rows($run_query) >0)
    {
echo "<script>alert('Admin Username is already exist, Please try another one!')</script>";
    session_start();
    $_SESSION['fullname'] = $fullname;
    $_SESSION['address'] = $address;
    $_SESSION['number'] =$contactnum;
    header('location:signupform.php');
    }
else if (mysqli_num_rows($run) >0)
{
    echo "<script>alert('Admin Email is already exist, Please try another one!')</script>";
    session_start();
    $_SESSION['fullname'] = $fullname;
    $_SESSION['address'] = $address;
    $_SESSION['number'] =$contactnum;
    header('location:signupform.php');
}
    else if((mysqli_num_rows($run_query) >0) && (mysqli_num_rows($run) >0))
    {
        echo "<script>alert('Admin Email and Admin Username is already exist, Please try another one!')</script>";
        session_start();
    $_SESSION['fullname'] = $fullname;
    $_SESSION['address'] = $address;
    $_SESSION['number'] =$contactnum;
    header('location:signupform.php');
    }
else{
    $checkuser="SELECT * FROM phdoer_doer.coadmin WHERE coadmin_username='$username'";
    $runquery=mysqli_query($con,$checkuser);
    if(mysqli_num_rows($runquery) == 0)
    {
        $saveaccount="insert into phdoer_doer.coadmin (coadmin_username,coadmin_name,coadmin_address,coadmin_email,coadmin_contactnum,coadmin_password,coadmin_code,coadmin_dateadded,coadmin_lastlog) VALUE ('$username','$fullname','$address','$email','$contactnum','$password','$status',now(),'')";
mysqli_query($con,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";
    }
    else
    {
        echo "<script>alert('Incorrect Data')</script>";
        
    }
				

    }

}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DOER</title>
	 <link rel="shortcut icon" href="../../assets/img/D.jpg" type="image/x-icon" />


    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
	<link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../../assets/css/flexslider.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />    
    <link href="../../css/style.css" rel="stylesheet" />
    
 
</head>
<body >
    <?php include_once('template_head.php'); ?>
          
          <div class="modal-dialog modal-sm">
            <div style="color:green;background-color:white;margin-top:130px;" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
              </div>
                <form role="form" method="post" action="signup.php" onsubmit="return checkForm(this);">
              <div class="modal-body">
            
				
				 
                   <fieldset>
					
							<div class="form-group">
                                <input class="form-control" placeholder="Username" name="adminusername" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Full Name" name="admincompletename" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Address" name="adminaddress" type="text" required>
							</div>
                       <div class="form-group">
                                <input class="form-control" placeholder="Email" name="adminemail" type="email" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" placeholder="Contact Number" name="adminnumber" type="text">
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass1" id="pass1" type="password" required>
							</div>
                       <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="pass2" id="pass2" type="password" onkeyup="checkPass1(); return false;" required>
                           <span id="confirmMessage" class="confirmMessage"></span>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               <input type="submit" class="btn btn-md button1 btn-block" name="register" style="color:white;background-color:green;" value="Sign Up"><button type="button" class="btn btn-md btn-danger btn-block" data-dismiss="modal">Cancel</button>
                  <center>
            <h5 style="color:#228B22;">Already have an account?</h5></center>
                  <a href='coadmin/signin.php' type="button" class="btn btn-md button1 btn-block" style='color:white;border-color:none;'>Sign In</a>
				   
              </div>
                    </form>
            </div>
          </div>
    <script>

  function checkPass1()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  

</script>
    </body>
</html>