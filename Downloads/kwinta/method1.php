
<?php
include("admin/scripts/connectmysql.php");
$con=OpenCon();
if(isset($_POST['done']))
{
$projectname = $_POST['projectname'];
$startingdate = $_POST['startingdate'];
$endingdate = $_POST['endingdate'];
$area=$_POST['area'];
$floors = $_POST['floors'];
$typeparking = $_POST['typeparking'];

    $cements = $_POST['cements'];
$steels = $_POST['steels'];
$bricks=$_POST['bricks'];
$check_user="select * from kwintador.projects WHERE projectname='$projectname'";
   $projectssid="select projectid from kwintador.projects";
    $run=mysqli_query($con,$projectssid);
   $rows= mysqli_fetch_array($run);
     $id = $rows["projectid"];
$run_query=mysqli_query($con,$check_user);
if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Name of the Project is already exists, see it for yourself!')</script>";
 echo"<script>window.open('projects.php','_self')</script>";
    }

else{
$saveaccount="insert into kwintador.projects (projectnamex,projectsdate,projectedate) VALUE ('$projectname','$startingdate','$endingdate')";
    $saveaccount1="insert into kwintador.details (projectssid,slabarea,floors,parking,cement,steel,bricks) VALUE ('$id','$area','$floors','$typeparking','$cements','$steels','$bricks')";
mysqli_query($con,$saveaccount);
    mysqli_query($con,$saveaccount1);
    
echo "<script>alert('Data successfully saved!')</script>";				
echo "<script>window.open('projects.php','_self')</script>";
    }
}

?>