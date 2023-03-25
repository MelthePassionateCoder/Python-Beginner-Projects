<?php
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
// Connect to the MySQL database  
include "connectmysql.php";  
$con = OpenCon();

$sqlCommand =   "CREATE TABLE doer.admin(
		 		 admin_id int(11) NOT NULL auto_increment,
				 admin_username varchar(24) NOT NULL,
		 		 admin_password varchar(24) NOT NULL,
		 		 last_log_date date NOT NULL,
		 		 PRIMARY KEY (admin_id),
		 		 UNIQUE KEY username (admin_username)
		 		 ) ";
if (mysqli_query($con,$sqlCommand)){ 
    echo "<a href='index.php'>Your admin table has been created successfully!</a>"; 
}else { 
    echo "<a href='index.php'>CRITICAL ERROR: admin table has not been created.</a>";
}
$sqlCommand1 = "CREATE TABLE doer.skilledworkers(
				worker_id int(11) NOT NULL auto_increment,
				 worker_username varchar(255) NOT NULL,
		 		 worker_fname varchar(16) NOT NULL,
				 worker_lname varchar(16) NOT NULL,
				 worker_skills varchar(16) NOT NULL,
				 worker_email varchar(255) NOT NULL,
				 worker_contactnumber varchar(24) NOT NULL,
				 worker_address varchar(255) NOT NULL,
				 worker_description text NOT NULL,
                 image varchar(255) NOT NULL,
		 		 date_added datetime NOT NULL,
		 		 PRIMARY KEY (worker_id),
		 		 UNIQUE KEY username (worker_username)
    )ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if(mysqli_query($con, $sqlCommand1))
{
    echo "Your workers table has been created successfully!";
}
else
{
    echo "Critical Error";
}
$sqlCommand2 = "CREATE TABLE doer.customers(
				cust_id int(11) NOT NULL auto_increment,
				 cust_username varchar(255) NOT NULL,
		 		 cust_comname varchar(16) NOT NULL,
				 cust_address varchar(16) NOT NULL,
				 cust_contactnum varchar(16) NOT NULL,
				 cust_email varchar(255) NOT NULL,
				 cust_password varchar(24) NOT NULL,
                 image varchar(255) NOT NULL,
		 		 date_added datetime NOT NULL,
                 date_logout datetime NOT NULL,
		 		 PRIMARY KEY (cust_id),
		 		 UNIQUE KEY username (cust_username)
    )ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if(mysqli_query($con, $sqlCommand2))
{
    echo "Your workers table has been created successfully!";
}
else
{
    echo "Critical Error";
}
$sql = "CREATE TABLE doer.users (
	reg_id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	fullname VARCHAR(50) NOT NULL,
	username VARCHAR(20) NOT NULL,
	email VARCHAR(30) NOT NULL,
	address VARCHAR(50) NOT NULL,
	age INT(10) NOT NULL,
	mobilenumber BIGINT(20) NOT NULL,
	password VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
