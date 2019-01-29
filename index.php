
 <?php
   session_start();
   require('includes/header.php');
   require_once ('dbconfig.php');
    if(isset($_POST['submit'])){
		
		$user  =   $_POST['username'];
		$pass  =   $_POST['password'];
		
		
		$checkLogin = "SELECT user_id,username,password,groupid FROM users 
		WHERE username ='$user' AND password = '$pass' ";
		$result = mysqli_query($connect,$checkLogin);
		// mysqli_num_rows()
		if(mysqli_num_rows($result) == 1){
			
			if($row = mysqli_fetch_array($result)){
			 $_SESSION['userid']  = $row[0];	
			 $_SESSION['user']    = $row[1];
			 $_SESSION['group']   = $row[3];
			 header('Location: dashboard.php');
			} 
			
		}else{
			echo "<script>
			      window.alert('Login Failed');
			   </script>";
		}
		
		/*if(empty($user) || empty($pass)){
			$error =  'Missing Dada..';
		}
		else{
		      echo 'Welcome, ' . $user . '<br>' . 'Your Password is : ' . $pass;
		}*/
		
	}


 ?>
	 
 	<div class="container">
 	
		<form class="form-login" action="" method="post">

	      <p  style="color:red;text-align: center">
		     <?php
			 
			    if(isset($error)){
					echo $error;
				}
			      
			 ?>
			</p>
			  <h3 class="text-center">Login Area</h3>
			 <input class="form-control" type="text" name="username" placeholder="User Name"  >
			 <input class="form-control" type="password" name="password" placeholder="Password"  >
			 <button class="btn btn-primary btn-block" type="submit" name="submit" >Log In</button>


		</form>
 	
 </div>

<?php require('includes/footer.php'); ?>