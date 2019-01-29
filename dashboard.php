
	
<?php

 session_start();
 if(!isset($_SESSION['user'])){
	 header('Location: index.php');
	 exit();
 }

 /*if(isset($_SESSION['group']) && $_SESSION['group'] =='admin')
 {
	 require('create_post.php');
 }else if(){
	 
 }*/
 
  require('includes/header.php');
  require('function.php');
?>
	  
	
		<div class="container">
		 
			<div class="row">
				<h2><span class="fa fa-user-circle-o" aria-hidden="true"></span> Dashboard <small> Manage Your Stock</small></h2>
				<?php
				  echo "Welcome " . $_SESSION['user'] ;
				?>
			</div> 	
			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
<a href="dashboard.php?page=home.php" class="list-group-item active"><span class="glyphicon glyphicon-dashboard"></span> Dashboard </a>
						
<a href="dashboard.php?page=register_product.php" class="list-group-item"><span class="glyphicon glyphicon-plus-sign"></span> Register Product </a>
						
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Product Count <span class="badge">
					<?php echo productCount(); ?></span></a>
						
<a href="dashboard.php?page=manage.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Management</a>
					
<a href="logout.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Sign Out</a>				
					
					</div>
				</div>
				<div class="col-md-9">
					<div class="panel panel-danger">
					 	<div class="panel-heading">Product Registration</div>
 					 	<div class="panel-body">
 					 		
						 <?php
							 if(isset($_GET['page'])){	  
							   $url = $_GET['page'];
								  require($url);
								 
							 }else{
								 require('home.php');
							 }
						 ?>
 					 		
 					 	</div>
					</div>
				</div>
			</div>
	</div>

<?php require('includes/footer.php'); ?>
