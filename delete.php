<?php
 require_once('dbconfig.php');
 $deletedId = $_GET['pid'];
 
 $delProduct = "DELETE FROM products WHERE id = '$deletedId' ";

 mysqli_query($connect,$delProduct);
header('Location:dashboard.php?page=manage.php');
 

?> 