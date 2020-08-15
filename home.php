<?php include "header.php";?>		<!--included header file-->

<div class="container-fluid">
	
    <?php
    	$user = get_login_user();		/*Now , if the user is in this page, means user is login , then we have to find the correspoing details about that user , and we will bring from database, and then will show in this home page .*/
    	// echo json_encode($user)."<br>";	
    ?>

    <div class="row">
    	<div class="col-lg-2 my-div-1">
    		<ul class="list-group">
	    		<a><li class="list-group-item">Friends</li></a>
	    		<a><li class="list-group-item">Menu</li></a>
	    		<a><li class="list-group-item">Notification</li></a>
	    		<a><li class="list-group-item">Message</li></a>
	    		<a><li class="list-group-item">Setting</li></a>
    		</ul>
    	</div>
    	<div class="col-lg-8">
    		<h1>Welcome In The Home Page</h1>
    		<h3>Id = <?php echo $user["id"];?></h3>			<!--so we have sotered the data in user var , so now we are accessing it like that we do for objects.-->
    		<h3>Name = <?php echo $user["name"];?></h3>
    		<h3>Email = <?php echo $user["email"];?></h3>
    		
    	</div>
    	<div class="col-lg-2 my-div-1">
    		<ul class="list-group">
	    		<a><li class="list-group-item">Contact Us</li></a>
	    		<a><li class="list-group-item">About Us</li></a>
	    		<a><li class="list-group-item">Address</li></a>
	    		
    		</ul>
    	</div>
    	
    </div>
    
</div>
<?php include "footer.php";?>