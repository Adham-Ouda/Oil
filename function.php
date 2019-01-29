<?php

 require_once('dbconfig.php');
 function productCount()
 {
	 global $connect;
	 $sql = "SELECT COUNT(*) FROM products";
	 $countProduct = mysqli_query($connect,$sql);
	 $productCount = mysqli_fetch_array($countProduct);
	 return $productCount[0];
 }

?>