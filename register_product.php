
<?php
  require_once('dbconfig.php');
   
   if(isset($_POST['submit'])){
	   
	   $productName   = $_POST['product'];
	   $code = $_POST['code'];
	   $category = $_POST['category'];
	   
	   $addProduct = "INSERT INTO products VALUES (NULL,'$productName','$code','$category',NOW())";
       mysqli_query($connect,$addProduct);
	 
	   echo "<script>
	            window.location='dashboard.php?page=register_product.php';
				window.alert('Product Registered Successfuly');
	         </script>";
	   
	   
   }

  
?>
  <form action="register_product.php" method="post">
  
    <input class="form-control" type="text" name="product" 
  	placeholder="Product name:" ><br>
  	
  	<input class="form-control" type="text" name="code" 
  	placeholder="Code:" ><br>
  	
  	<input class="form-control" type="text" name="category" 
  	placeholder="Category:" ><br>
  	
 
   <input class="btn btn-primary" type="submit" name="submit" value="Save" >

  </form>