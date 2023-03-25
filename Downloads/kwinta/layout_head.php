<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header" style="background-color:white;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="background-color:green;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font:bold 20px Broadway; color:green;margin-left:65px;">KWINTADOR Takeoff and Estimate</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color:white;">
                <ul class="nav navbar-nav side-nav" style="background-color:white;margin-top:50px;">
                    <li><a href="main.php" style="color:green;"> &nbsp; <span class='glyphicon glyphicon-home'></span>  Home</a></li>
					<li><a href="projects.php" style="color:green;"> &nbsp; <span class='glyphicon glyphicon-user'></span>  My Projects</a></li>
					<!-- <li><a href="orderdetails.php" style="color:green;"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span>  Job Order</a></li>
					<li><a href="view_purchased.php"style="color:green;"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Transaction History</a></li> -->
					<li><a data-toggle="modal" data-target="#setAccount"style="color:green;"> &nbsp; <span class='fa fa-gear'></span>  Account Settings</a></li>
					<li><a href="logout.php" style="color:green;"> &nbsp; <span class='glyphicon glyphicon-off'></span>  Logout</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user" style="background-color:white;">
                    <li class="dropdown messages-dropdown">
                        <a href="#" style="color:green;"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                    <li><div class="container1">
  <img src="assets/img/person-1.jpg" alt="Your Picture" class="image1 img img-circle" style="width:50px;height:50px;">
  <div class="overlay1">
    <i class="fa fa-add"></i>
  </div>
</div></li>
                
                     <li class="dropdown user-dropdown">
                        <a href="#" style="color:green;"><i class="fa fa-user"></i>Hello!<strong><?php echo $rows1['clientname']; ?></strong> </a>
                    </li>
                </ul>
            </div>
        </nav>