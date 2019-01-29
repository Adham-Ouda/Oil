<table id="PostTable" class="table table-hover table-bordered">
 
 <thead>
  <tr>
		 <th>Serial</th>
		 <th>Product name</th>	
		 <th>Code</th>
		 <th>Category</th>
		 <th>Actions</th>
	 </tr>
	</thead>
<?php
 require_once('dbconfig.php');
 $readProduct = "SELECT id , product_name , code, category FROM products ORDER BY created DESC"; // order by (asecnding(asc) or descending(desc))

 $result = mysqli_query($connect,$readProduct);
while($products =  mysqli_fetch_array($result))
{
?>	
	<tr>
			<td>
				<?php
 				static $s = 1;
 				echo $s++;
 				?>
			</td>
	
	         <td>
			 <a href='#'>
			   <?php echo $products[1] ?>	
			 </a>
			 </td>	
			 
			 <td>
			    <?php echo $products[2] ?>
			 </td>
			 
			 <td>
			    <?php echo $products[3] ?>
			 </td>
			
			 <td>
			   <a class='btn btn-primary btn-sm' 
			   href='dashboard.php?page=edit_post.php&pid=<?php echo $products[0] ?>' 
			   title='Edit'>
			    <span class='glyphicon glyphicon-edit'></span>
			   </a>
			   
			   <a class='btn btn-danger btn-sm' 
			   href='delete.php?pid=<?php echo $products[0] ?>' 
			   title='Delete'>
			     <span class='glyphicon glyphicon-trash'></span>
			   </a>
			
			</td>
	       </tr>
<?php
}

?>
</table>
<script>
$(document).ready(function() {
    $('#PostTable').DataTable();
} );

</script>