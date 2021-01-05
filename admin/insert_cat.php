<?php 
session_start();
	include_once '../connection.php';
	include_once 'header.php';
if(isset($_POST['insert_cat'])){
	
	$cat_title = $_POST['new_cat'];
	
	if($cat_title==''){
		
		echo "<script>alert('Vui lòng điền đầy đủ thông tin')</script>";
		
		}
		else {
	
	$insert_cat = "INSERT into categories (cat_title) values ('$cat_title')";
	
	$run_cat = mysqli_query($con,$insert_cat); 
	
	
	echo "<script>alert('Thêm thành công !!!')</script>";
	echo "<script>window.open('category.php?insert_cat','_self')</script>";
	
		}
	
	}
 ?>
<div class="container pl-5">
	<div class="d-flex justify-content-center align-items-center" style="min-height: 60vh;width: 70%">
		<form action="#" method="POST" class="shadow p-5">
			<input type="text" name="new_cat" class="form-control" style="width: 400px;">
			<button type="submit" class="btn btn-success mt-4 mr-3" name="insert_cat">Thêm</button>
			<button type="button" class="btn btn-primary mt-4" onclick="return window.location.href='category.php'" name="insert_cat">Quay lại</button>
		</form>
	</div>
</div>
<?php include_once 'footer.php'; ?>