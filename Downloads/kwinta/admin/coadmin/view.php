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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOER</title>
	 <link rel="shortcut icon" href="../../assets/img/doer.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/local.css" />

   
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/datatables.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
         <?php include_once("layout_head.php"); ?><div id="page-wrapper"><div class="alert alert-danger">
       <center> <h3><strong>Skilled Workers Management</strong> </h3></center>
            </div>
						  <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="200%">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Username</th>
                  <th>Full Name</th>
                  <th>Skills</th>
                  <th>Contact Number</th>
                  <th>Email Address</th>
                  <th>Address</th>
                  <th>Description</th>
                  <th>List of Certificates</th>
				  <th>Date Added</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
              <?php
                  $sql = mysqli_query($con,"SELECT * FROM phdoer_doer.skilledworkers");
                  if(mysqli_num_rows($sql))
                  {
		while($rows=mysqli_fetch_array($sql))
		{     $workerid=$rows['worker_id'];
			?>               
								
                                 
			  
                <tr>
                  <td>
				<center> <img src="../pictures/<?php echo $rows['image']; ?>" class="img img-circle"  width="100" height="150" alt="no display, no image found in database"/></center>
				 </td>
                 <td><?php echo $rows['worker_username']; ?></td>
                 <td><?php echo $rows['worker_fname']; ?>&nbsp;<?php echo $rows['worker_lname']; ?></td>
				 <td><?php echo $rows['worker_skills']; ?></td>
				 <td><?php echo $rows['worker_contactnumber']; ?></td>
				  <td><?php echo $rows['worker_email']; ?></td>
				   <td><?php echo $rows['worker_address']; ?></td>
				    <td><?php echo $rows['worker_description']; ?></td>
				      <td><?php echo $rows['worker_desc']; ?></td>
				 <td><?php echo $rows['date_added']; ?></td>
				 
				 <td>
				
				 
				
				 <a class="btn btn-info" href="editworker.php?edit_id=<?php echo $rows['worker_id']; ?>" title="click for edit" onclick="return confirm('Are you sure edit this item?')"><span class='glyphicon glyphicon-pencil'></span> Edit Item</a> 
				
                  <a class="btn btn-danger" name="Delete" value="Delete" onClick="deleteme(<?php echo $rows['worker_id']; ?>)"><span class='glyphicon glyphicon-trash'></span> Remove Item</a>
				
                  </td>
                </tr>
                
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		
		echo "<br />";
		echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy 2016 EDGE Skateshop| All Rights Reserved |  Design by : EDGE Team

						</p>
                        
                   
	</div>';
	
		
                  }
	else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
                </tbody>
                              </table>
        </div>
        </div>
	</div>
<?php include_once("add.php"); ?>
		
		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
		
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
<script language="javascript">
 function deleteme(delid)
 {
 if(confirm("Are you sure you want to delete this person?")){
 window.location.href='delete.php?del_id=' +delid+  '';
 return true;
 }
 } 
 </script>
</body>
</html>
