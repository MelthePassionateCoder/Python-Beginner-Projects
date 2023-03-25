
<?php
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
// Connect to the MySQL database  
include "connectmysql.php";  
$con = OpenCon();

$sqlCommand =   "CREATE TABLE doer.image(
		 		 image_id int(11) NOT NULL auto_increment,
                 worker_id INT,
				 file_name varchar(24) NOT NULL,
		 		 PRIMARY KEY (image_id),
		 		 FOREIGN KEY(worker_id) REFERENCES doer.skilledworkers(worker_id)
		 		 ) ";
if (mysqli_query($con,$sqlCommand)){ 
    echo "<a href='index.php'>Your admin table has been created successfully!</a>"; 
}else { 
    echo "<a href='index.php'>CRITICAL ERROR: admin table has not been created.</a>";
}


?>