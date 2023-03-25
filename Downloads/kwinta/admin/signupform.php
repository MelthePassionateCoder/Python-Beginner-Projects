<div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:green;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
              </div>
                <form role="form" method="post" action="index.php" onsubmit="return checkForm(this);">
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
               <input type="submit" class="btn btn-md button1 btn-block" name="register" style="color:white;background-color:green;" value="Sign Up">
                
				
				 <button type="button" class="btn btn-md btn-danger btn-block" data-dismiss="modal">Cancel</button>
				   
              </div>
                    </form>
            </div>
          </div>
        </div>