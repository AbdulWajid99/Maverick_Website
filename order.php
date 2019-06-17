<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<body>
	<a href="welcome.php">Submit</a>
	<?php 
	include("header.php");
	?>
<center><div style="width: 80%; height: auto; background-color: #F60;">
		<form method="post" action="contact_post.php">
					    	<div>
						    	<span> <center><label><h4>YOUR NAME</h4></label> </center></span>
						    	<span><center><input name="name" type="text" class="textbox" id="name" required></center></span>
						    </div>
                            <br>
                            
						    <div>
						    	<span> <center><label><h4>YOUR E-MAIL</h4></label></center></span>
						    	<span> <center><input name="email" type="text" class="textbox" id="email" required></center></span>
						    </div>
						    <div>
                            <br>
						     	<span> <center><label><h4>YOUR MOBILE NUMBER</h4></label></center></span>
						    	<span> <center><input name="mobile" type="text" class="textbox" id="mobile"></center></span>
						    </div>
						    <div>
                            <br>
						    	<span> <center><label><h4>YOUR COMPLETE ADDRESS AND PRODUCT DETAILS</h4></label></center></span>
						    	<span> <center><textarea style="height:50px" name="msg" id="msg" required> </textarea></center></span>
						    </div>
						   <div>
                           <br>
						   		<span> <center><input type="submit" value="Submit"></center></span>
							   <span> <center><input type="reset" value="Reset"></center></span>
						  </div>
					    </form>

		
	</div></center>
<?php 
	include("footer.php");
	?>
</body>
</html>