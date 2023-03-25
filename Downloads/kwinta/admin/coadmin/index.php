<?php
session_start();
if(isset($_SESSION["manager"])){
    header("location: main.php");
    exit();
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
     <div class="container"style="margin-top:80px;margin-bottom:0px;" id="home">
         <center><img src="../../assets/img/doer.png" width="400" height="200"><br><br>
             <a  href="#services" class="btn btn-lg button1" style="color:cornsilk;" >SERVICES WE OFFER</a>
             
             
             <div class="flexslider set-flexi" id="main-section" style="margin-top:5px;padding:5px;margin-bottom:0px;">
                 <ul class="slides move-me" style="margin-top:5px;"><li>
             <h3 style="font:16px Calibri;color:green;">Doer is a web and mobile application for busy individuals to help them with their household or micro business needs.</h3>
                            
                     </li>
                 <li>
             <h3 style="font:16px Calibri;color:green;">With one tap away, busy individuals can immediately find skilled workers to fix certain household needs and micro businesses that hire and prefer part-time workers.</h3>
                            
                     </li>
                 <li>
             <h3 style="font:16px/30px Calibri;color:green;">Doer will save you from inconvenience! Getting things done in no time is one of the most fulfilling experiences. </h3>
                            
                     </li></ul>
             </div>
         </center></div>
         <div id="services" class="container" style="padding:0px;margin-bottom:0px;margin-top:80px;">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 class="header-line" style="font:bold 30px Calibri; color:green">SERVICES</h1>
                 </div></div><div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/broom1.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Housekeeping</h4>
                      <a class="btn button1" style="color:white;font:Calibri;" href='#ln' data-toggle="modal" data-target="#ln">Hire Me</a>
                   <p style="font:16px Calibri;color:black;">
                       Perform a variety of cleaning activities such as sweeping, mopping, dusting and polishing. Ensure all rooms are cared for and inspected according to standards.
                   </p>
				   </center>
              
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/elec.jpg" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Electrical Services</h4>
                      <a class="btn button1" style="color:white;font:Calibri;" href='#ln' data-toggle="modal" data-target="#ln">Hire Me</a>
                   <p style="font:16px Calibri;color:black;">Electricians install and maintain electrical power, communications, lighting, and control systems in homes. Inspect electrical components, such as transformers and breakers.</p>
				   </center></div>
                   </div>
				   
				   
				    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/plumber.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;" href='#ln' data-toggle="modal" data-target="#ln">Plumbing</h4>
               <a class="btn button1" style="color:white;font:Calibri;">Hire Me</a>
                   <p style="font:16px Calibri;color:black;">Installs, maintains, and repairs pipes and fixtures associated with heating, cooling, water distribution, and sanitation systems. Inspects drainage and plumbing systems for compliance with local and national regulations.
                   </p>
				   </center></div>
                   </div></div>
             </div>
   <div class="container" style="padding:0px;margin-top:0px;">
       <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/Mower.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Lawn Mowing</h4>
                      <a class="btn button1" style="color:white;font:Calibri;" href='#ln' data-toggle="modal" data-target="#ln">Hire Me</a>
                     <p style="font:16px Calibri;color:black;">Plawn care worker job description. Lawn care workers complete a variety of landscaping duties, such as maintaining lawns, trimming trees, applying pesticides, planting flowers and grass, installing irrigation systems, and edging around flower beds.</p></center>
            </div>
                   </div>
       <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s"><div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/gadget.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Gadget Repair</h4>
                      <a class="btn button1" style="color:white;font:Calibri;" href='#ln' data-toggle="modal" data-target="#ln">Hire Me</a>
                   <p style="font:16px Calibri;color:black;">
                       Cell phone technicians are responsible for repairing cell phones which have malfunctioned and restore them to good operating condition. Knowledge of the hardware and software of various cell phone models is important in this position, and the ability to read blueprints and manuals is also necessary.
                   </p>
				   </center>
              
                </div>
                   </div><div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/carpen.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Carpentry</h4>
                      <a class="btn button1" style="color:white;font:Calibri;" href='#ln' data-toggle="modal" data-target="#ln">Hire Me</a>
                   <p style="font:16px Calibri;color:black;">
                       Carpenters construct and repair building frameworks and structures such as stairways, doorframes, partitions, and rafters made from wood and other materials. They also may install kitchen cabinets, siding and drywall.
                   </p>
				   </center>
              
                </div>
                   </div>
    </div>
    <div class="container set-pad" id="howitworks" style="margin-top:0px;padding:0px;">
    <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 class="header-line" style="font:bold 30px Calibri; color:green">HOW IT WORKS</h1>
                 </div></div>
    <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">            
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/login1.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Step 1</h4>
                   <p style="font:18px Calibri;color:green;">
                       Sign up or Log in to your ccount
                   </p>
				   </center>
              
                </div>
                   </div>
    <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/search1.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Step 2</h4>
                   <p style="font:18px Calibri;color:green;">
                       Choose from Our Services
                   </p>
				   </center>
              
                </div>
                   </div>
        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">            
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/request1.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;">Step 3</h4>
                   <p style="font:18px Calibri;color:green;">
                       Request/Receive for Quotation
                   </p>
				   </center>
              
                </div>
                   </div>
    <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     
                     <div class="about-div">
                  <center>  <img class="img img-circle" src="../../assets/img/hire1.png" style="width:200px;height:200px;" />
                   <h4 style="font:bold 20px Calibri;color:black;"style="color:green;">Step 4</h4>
                   <p style="font:18px Calibri;color:green;"style="color:green;">
                       Confirm Job Order
                   </p>
				   </center>
              
                </div>
                   </div>
    
    
    </div><div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="color:black;">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" style="color:green;">Contact Us</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
					  <br />For more details. See the contact information below.
                         <br> 
                         </p>
                     
                     <p> Contact Numbers: <b>+63-9364403827 </b> / <b>+63-9165473660</b></p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

<br />
           
             <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s"></div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">
                    </div>


                </div>
                 </div>
                 
                 
               </div><?php include_once("signupform.php"); ?>
               <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:green;background-color:white" class="modal-content">
                
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:green;" class="modal-title" id="myModalLabel">Co-Admin Login</h4>
              </div>
                <form role="form" method="post" action="coadminlogin.php">
              <div class="modal-body">
            
				
				 
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" id="admin_password" type="password" required>
							</div>
                       <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" onkeyup="checkPass(); return false;" required>
                           <span id="confirmMessage1" class="confirmMessage1"></span>
							</div>
                  <div class="form-group">
                                <input class="form-control" placeholder="Enter the CODE" name="admin_code" id="admin_code" type="password" required>
							</div></fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md button1 btn-block" name="user_login" style="color:white;background-color:green;">Sign In</button>
				
				 <button type="button" class="btn btn-md btn-danger btn-block" data-dismiss="modal">Cancel</button><center>
            <h5 style="color:#228B22;">Want to be part of Doer Company?</h5></center>
                  
				   <a href='signup.php' type="button" class="btn btn-md button1 btn-block" style='background-color:navy;color:white;border-color:none;'>Sign Up</a>
             
              </div>
                    </form>
                    
            </div>
          </div>
        </div>
		
		
    <div id="footer" style="background-color:white;">
         2019 DOER | Your Lifetime Solution Partner 
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
  
 <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
         <script src="../../assets/js/jquery.flexslider.js"></script>
    <script src="../../assets/js/scrollReveal.js"></script>
    <script src="../../assets/js/jquery.easing.min.js"></script>
         <script src="../assets/js/custom.js"></script>
</body>
</html>
