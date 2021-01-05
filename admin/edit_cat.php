<?php 	
session_start();
include_once 'header.php';
include("../connection.php");

if(isset($_GET['edit_cat'])){
	$edit_id = $_GET['edit_cat']; 
	$get_cat = "SELECT * from categories where cat_id='$edit_id'";
	$run_cat_new = mysqli_query($con,$get_cat); 
	while ($row_cat=mysqli_fetch_array($run_cat_new)){	
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
	}	
}
?>
<div class="container pl-5">
	<div class="d-flex justify-content-center align-items-center" style="min-height: 60vh;width: 70%">
		<form action="#" method="POST" class="shadow p-5">
			<input type="text" name="new_cat" class="form-control" style="width: 400px;" value="<?php echo $cat_title; ?>">
			<button type="submit" class="btn btn-success mt-4 mr-3" name="update_cat">Sửa</button>
			<button type="button" class="btn btn-primary mt-4" onclick="return window.location.href='category.php'" name="insert_cat">Quay lại</button>

		</form>
	</div>
</div>
<?php include_once 'footer.php'; ?>
<?php 
if(isset($_POST['update_cat'])){
	$cat_title = $_POST['new_cat'];
	if($cat_title==''){
		echo "<script>alert('Vui lòng điền đầy đủ thông tin')";
		echo "<script>window.open('edit_cat.php?insert_cat','_self')</script>";
	}
	else {
		$update_cat = "UPDATE categories set cat_title='$cat_title' where cat_id='$cat_id'";
		$run_update = mysqli_query($con,$update_cat); 		
		echo "<script>alert('Update thành công!')</script>";
		echo "<script>window.open('category.php?view_cats','_self')</script>";	
	}
}

?>