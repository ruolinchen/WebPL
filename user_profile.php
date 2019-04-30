<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>     
	
	<link rel="stylesheet" href="user_profile.css"/>
	
	<!-- Pull navbar from navbar.html -->
	<script> 
 	    $(function(){
  			$("#navbar-loaded").load("navbar.html"); 
  	    });
    </script>    
	
	<title>User Profile</title>
</head>
<body>
	<!-- Navbar -->
    <div id = "navbar-loaded"></div>
    
    <!-- Bio -->
	<div class = "container" style="padding-top: 50px">
		<div class = "row">
			<div class = "profile col-sm-3">
				<div class = "panel widget light-widget panel-bd-top">
					<div class = "panel-body">
						<img src ="profile.jpeg" class="img-fluid" alt="Profile Picture" style="padding-top: 20px">
						<h2 style="padding-bottom: 15px">Username <i class="fas fa-user-edit" id="edit"></i></h2>

			<!-- Editing Profile Information (in the works) -->
						<!-- The Modal -->
						<div id="form" class="modal">

  							<!-- Modal content -->
  							<div class="modal-content">
   								<span class="close" style="text-align:right">&times;</span>
								<form action="edit_user.php" method="POST"> 
								    Name: <input type="text" name="name" placeholder="Name"><br/>
                                    Age: <input type="text" name="age" placeholder="Age"><br/>
                                    Location: <input type="text" name="location" placeholder="Location"><br/>
                                    Favorite Groups: <input type="text" name="groups" placeholder="SNSD, BTS, Twice, etc."><br/>
                                    About Me: <textarea name="about" rows="5" cols="40" placeholder="About Me"></textarea><br/>
                                    <input type="submit" value="Update" name="submit">
                                </form>
 							</div>
						</div>
						
						<p> Welcome to the user profile page. Here, the user can edit information about themselves.
						<br>[Biography of the user here]
						<br><b>Name: </b>
							<?php 
								require('connect-db.php');
								$query = "SELECT name FROM users WHERE username = 'username'";
								$statement = $db->prepare($query);
								$statement->execute();
                                $info = $statement->fetch();
                                $statement->closeCursor();
								echo $info['name'];
							?>
                        <br><b>Age: </b>
                            <?php 
								require('connect-db.php');
								$query = "SELECT age FROM users WHERE username = 'username'";
								$statement = $db->prepare($query);
								$statement->execute();
                                $info = $statement->fetch();
                                $statement->closeCursor();
								echo $info['age'];
							?>
                        <br><b>Location: </b>
                            <?php 
								require('connect-db.php');
								$query = "SELECT location FROM users WHERE username = 'username'";
								$statement = $db->prepare($query);
								$statement->execute();
                                $info = $statement->fetch();
                                $statement->closeCursor();
								echo $info['location'];
							?>
                        <br><b>Favorite Groups: </b>
                            <?php 
								require('connect-db.php');
								$query = "SELECT groups FROM users WHERE username = 'username'";
								$statement = $db->prepare($query);
								$statement->execute();
                                $info = $statement->fetch();
                                $statement->closeCursor();
								echo $info['groups'];
							?>
                        <br><b>About me: </b>
                            <?php 
								require('connect-db.php');
								$query = "SELECT about FROM users WHERE username = 'username'";
								$statement = $db->prepare($query);
								$statement->execute();
                                $info = $statement->fetch();
                                $statement->closeCursor();
								echo $info['about'];
							?>
						</p>
					</div>
				</div>
			</div>

			<!-- The user's blog posts -->
			<div class = "col-sm-9">
				<div class = "header">
					<h1>My Blog Posts  
						<a href="create_blog.html">
							<i class="fas fa-plus-circle"></i>
  						</a>
  					</h1>
				</div>
  				<div class="list-item">
  					<article class="blog_post">
   					 	<a class="block" href="view_blog.html">
   					 		<div class="col">
   					 			<div class="row">
   					 				<img class="blog image" src="bts.jpg" class="image-fluid" style="padding-right:10px">
   					 				<div class="rows">
   					 					<section class="desc">
	   					 					<h3>Example Post</h3>
	   					 			   		<div class="action pointer">
    											<i class="far fa-heart"></i>
    											<span class="num">1000</span> Likes
    											<i class="far fa-comment-dots" style="padding-left:10px"></i>	
    											<span class="num">3</span> Comments
    										</div>
    										<div class="content"> Blog Preview </div>
    									</section>
    								</div>
    							</div>
    						</div>
    					</a>
    				</article>
    				<hr/>
    			</div>
    			<div class="list-item">
  					<article class="blog_post">
   					 	<a class="block" href="view_blog.html">
   					 		<div class="col">
   					 			<div class="row">
   					 				<img class="blog image" src="bts.jpg" class="image-fluid" style="padding-right:10px">
   					 				<div class="rows">
   					 					<section class="desc">
	   					 					<h3>Another Blog Post</h3>
	   					 					<div class="action pointer">
    											<i class="far fa-heart"></i>
    											<span class="num">1000</span> Likes
    											<i class="far fa-comment-dots" style="padding-left:10px"></i>	
    											<span class="num">3</span> Comments
    										</div>
    										<div class="content"> Blog Preview </div>
    									</section>
    								</div>
    							</div>
    						</div>
    					</a>
    				</article>
    				<hr/>
    			</div>
    			<div class="list-item">
  					<article class="blog_post">
   					 	<a class="block" href="view_blog.html">
   					 		<div class="col">
   					 			<div class="row">
   					 				<img class="blog image" src="bts.jpg" class="image-fluid" style="padding-right:10px">
   					 				<div class="rows">
   					 					<section class="desc">
	   					 					<h3>Title of Blog Post</h3>
	   					 					<div class="action pointer">
    											<i class="far fa-heart"></i>
    											<span class="num">1000</span> Likes
    											<i class="far fa-comment-dots" style="padding-left:10px"></i>	
    											<span class="num">3</span> Comments
    										</div>
    										<div class="content"> Blog Preview </div>
    									</section>
    								</div>
    							</div>
    						</div>
    					</a>
    				</article>
    				<hr/>
    			</div>
    		</div>
    	</div>
	</div>
	
<script src="edit_user.js"></script>

</body>
