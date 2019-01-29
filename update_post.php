<?php
 
require_once('dbconfig.php');
$id       =  $_POST['id'];
$productName    =  $_POST['product'];
$code  =  $_POST['code'];
$category = $_POST['category'];
$updateProduct = "UPDATE products SET product_name = '$productName' , code='$code' ,                 category='$category' ,    created =NOW() WHERE id = '$id' ";


mysqli_query($connect,$updateProduct);

header('Location:dashboard.php?page=manage.php');

?>