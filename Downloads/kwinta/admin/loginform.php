<?php 
if(isset($_GET['pid']))
{
    $manager= $_GET['pid'];
}
?>
<?php
session_start();
if(isset($_SESSION["manager"])){
    header("location: index.php");
    exit();
}
?>
<?php
if(isset($_POST["admin_username"]) && isset($_POST["admin_password"]))
{
    $manager=preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_username"]);
    $password = preg_replace('#[^A-Za-z0-9]#i','',$_POST["admin_password"]);
   // $password=base64_encode($pass);
include "scripts/connectmysql.php";
$con = OpenCon();
$sql = mysqli_query($con, "SELECT admin_id FROM phdoer_doer.admin WHERE admin_username='$manager' AND admin_password='$password' LIMIT 1");

$existCount = mysqli_num_rows($sql);
if($existCount == 1)
{
    while($row= mysqli_fetch_array($sql))
    {
        $id = $row["admin_id"];
    }
    
    $_SESSION["id"]= $id;
     $_SESSION["manager"]= $manager;
     $_SESSION["password"]= $password;
    header("location: main.php");
    //echo 'WELCOME MANAGER <a href="index.php">CLICK HERE TO CONTINUE</a>';
    exit();
    
} else
{
    echo "<script>alert('Incorrect Data!')</script>";
    
   
    
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
	 <link rel="shortcut icon" href="../assets/img/D.jpg" type="image/x-icon" />


    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/css/flexslider.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />    
    <link href="../css/style.css" rel="stylesheet" />
    
 
</head>
<body >
    <?php include_once('template_head.php'); ?>
          <div class="modal-dialog modal-sm">
            <div style="color:green;background-color:white;margin-top:130px;" class="modal-content">
                
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:green;" class="modal-title" id="myModalLabel">Admin Login</h4>
              </div>
                <form role="form" method="post" action="loginform.php">
              <div class="modal-body">
            <div class="alert alert-danger"><center>
  <strong>INCORRECT DATA!</strong> Please input the following.</center>
</div>
				
				 
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $manager; ?>" name="admin_username" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" id="admin_password" type="password" required>
							</div>
                       <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" onkeyup="checkPass(); return false;" required>
                           <span id="confirmMessage1" class="confirmMessage1"></span>
							</div></fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md button1 btn-block" name="user_login" style="color:white;background-color:green;">Sign In</button>
				
				 <button type="button" class="btn btn-md btn-danger btn-block" data-dismiss="modal">Cancel</button><center>
            <h5 style="color:#228B22;">Want to be part of Doer Company?</h5></center>
                  
				   <button type="button" class="btn btn-md button1 btn-block" data-dismiss="modal" data-toggle="modal" data-target="#su" style="color:white;background-color:green;"><a href='coadmin/signup.php'>Sign Up</a></button>
             
              </div>
                    </form>
                    
            </div>
          </div>
    <script>

  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('admin_password');
    var pass2 = document.getElementById('confirm_password');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage1');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(admin_password.value == confirm_password.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        confirm_password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  

</script>
    </body>
</html>