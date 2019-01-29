<?php

 require_once('dbconfig.php');
 $id = $_GET['pid'];

 $sql = "SELECT * FROM products WHERE id ='$id'";
 $result = mysqli_query($connect,$sql);

 $product = mysqli_fetch_array($result);

?>


<form action="update_post.php" method="post">
   
   <input type="hidden" name="id" value="<?php echo $product[0]; ?>" ><br>
   <input class="form-control" type="text" name="product" 
  	placeholder="Product name:" value="<?php echo $product[1];?>"><br>
  	
  	<input class="form-control" type="text" name="code" 
  	placeholder="Code:" value="<?php echo $product[2];?>"><br>
  	
  	<input class="form-control" type="text" name="category" 
  	placeholder="Category:" value="<?php echo $product[3];?>" ><br>
  	
	<input class="btn btn-primary" type="submit" value="Update" >
</form>	