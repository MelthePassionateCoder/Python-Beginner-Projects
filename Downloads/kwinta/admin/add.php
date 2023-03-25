<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:green;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:green;font:bold 20px Calibri;" class="modal-title" id="myModalLabel">Skilled Worker Application Form</h2>
              </div> <form enctype="multipart/form-data" method="post" action="additems.php">
              <div class="modal-body">
         
				
			
				
				
                   <fieldset>
                            <p>Name of Worker</p>
                            <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="worker_fname" name="worker_fname" placeholder="First Name" REQUIRED>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="worker_lname" name="worker_lname" placeholder="Last Name" REQUIRED>
                  </div>
                </div>
                <div class="form-group row">
            <div class="col-sm-6 mb-4 mb-sm-0">
      <input type="text" class="form-control" id="worker_username" name="worker_username" placeholder="Username" REQUIRED>
    </div>
    <div class="col-sm-6">
      <select id="worker_skills" name="worker_skills" class="form-control">
       <option>Carpenter</option>
          <option>Electrician</option>
          <option>Plumbing</option>
          <option>Housekeeper</option>
      </select>
    </div></div><div class="form-group">
      <input type="text" class="form-control form-control-user" id="worker_contactnumber" name="worker_contactnumber" placeholder="Contact Number" REQUIRED>
    </div>
                  <div class="form-group">
      <input type="text" class="form-control form-control-user" id="worker_address" name="worker_address" placeholder="Address" REQUIRED>
    </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="worker_email" name="worker_email" placeholder="Email Address">
                </div>
                  <div class="form-group">
                  <textarea class="form-control" id="worker_description" name="worker_description" rows="3" placeholder="For more additional info..."></textarea>
                </div>
                       <div class="form-group">
                  <textarea class="form-control" id="worker_description1" name="worker_description1" rows="3" placeholder="List of Certificates"></textarea>
                </div>
                        <p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Add Now</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   
              </div>
              </form>
            </div>
          </div>
        </div>