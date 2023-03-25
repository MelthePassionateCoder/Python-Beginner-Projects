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
    <title>EDGE Skateshop</title>
	 <link rel="shortcut icon" href="../../assets/img/doer.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/local.css" />

  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/datatables.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <?php include_once("layout_head.php"); ?><div id="page-wrapper">
            
			
	
			 <div class="alert alert-danger">
                        
                          <center> <h3><strong>Customer Management</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Contact Number</th>
				  <th>Address</th>
                 <th>Email</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
$sql = mysqli_query($con,"SELECT * FROM phdoer_doer.customers");
	
	if(mysqli_num_rows($sql) > 0)
	{
		while($row=mysqli_fetch_array($sql))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td><?php echo $row['custusername']; ?></td>
				 <td><?php echo $row['custname']; ?></td>
				 <td><?php echo $row['custnumber']; ?></td>
				 <td><?php echo $row['custaddress']; ?></td>
				 <td><?php echo $row['custemail']; ?></td>
				<td>
				
				 
				
				 <a class="btn btn-success" href="view_orders.php?view_id=<?php echo $row['user_id']; ?>"><span class='glyphicon glyphicon-shopping-cart'></span> View Orders</a> 
				  <a class="btn btn-warning" href="?order_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to reset the customer items ordered?')">
				  <span class='glyphicon glyphicon-ban-circle'></span>
				  Reset Order</a>
				  
				
				
                  <a class="btn btn-danger" href="?delete_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this customer?')">
				  <span class='glyphicon glyphicon-trash'></span>
				  Remove Account</a>
				
                  </td>
                </tr>
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
		echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy 2016 EDGE Skateshop| All Rights Reserved |  Design by : EDGE Team

						</p>
                        
                    </div>
	</div>';
	
		echo "</div>";
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
		
	</div>
	</div>
	
	<br />
	<br />
           

           
        </div>
		
		
		
    </div>
    <?php include_once("add.php"); ?><script type="text/javascript" charset="utf-8">
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
</body>
</html>
