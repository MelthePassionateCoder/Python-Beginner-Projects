<div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
<div class="modal-dialog modal-sm">
<div style="color:green;background-color:white" class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h2 style="color:green" class="modal-title" id="myModalLabel">Account Settings</h2>
</div>
<div class="modal-body">
<form enctype="multipart/form-data" method="post" action="settings.php">
<fieldset>
<p>Full Name:</p>
<div class="form-group">
<input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php  echo $rows1['clientname']; ?>" required></div>
<p>Username:</p>
<div class="form-group">
<input class="form-control" placeholder="Username" name="user_lastname" type="text" value="<?php  echo $rows1['clientusername']; ?>" required></div>
<p>Address:</p>
<div class="form-group"><input class="form-control" placeholder="Address" name="user_address" type="text" value="<?php  echo $rows1['clientemail']; ?>" required></div>

<p>Password:</p><div class="form-group"><input class="form-control" placeholder="Password" name="user_password" type="password" value="<?php  echo $rows1['custpassword']; ?>" required></div></fieldset><div class="modal-footer"><button class="btn btn-block btn-success btn-md" name="user_save">Save</button><button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button></div>
</form></div></div></div></div>