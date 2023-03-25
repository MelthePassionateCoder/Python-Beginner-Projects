<?php
session_start();
$fullname = $_SESSION['fullname'];
$address = $_SESSION['address'];
$number = $_SESSION['number'];
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
            
				<div class="alert alert-danger"><center>
  <strong>USERNAME/EMAIL</strong> is already exist. </center>
</div>
				 
                   <fieldset>
					
							<div class="form-group">
                                <input class="form-control" placeholder="Enter a valid USERNAME" name="adminusername" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" value="<?php echo $fullname;?>" name="admincompletename" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" value="<?php echo $address;?>" name="adminaddress" type="text" required>
							</div>
                       <div class="form-group">
                                <input class="form-control" placeholder="Enter a valid EMAIL" name="adminemail" type="email" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $number;?>" name="adminnumber" type="text">
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
               <input type="submit" class="btn btn-md button1 btn-block" name="register" style="color:white;background-color:green;" value="Sign Up">
                
				
				 <button type="button" class="btn btn-md btn-danger btn-block" data-dismiss="modal">Cancel</button>
				   
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