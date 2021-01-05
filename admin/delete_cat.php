<?php 
@session_start(); 

if(!isset($_SESSION['user_name'])){
	
	echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
	}

else {


?>
<?php 
include("../connection.php");
	
	if(isset($_GET['delete_cat'])){
		
		$delete_id = $_GET['delete_cat']; 
		
		$delete_cat = "DELETE from categories where cat_id='$delete_id'";
		
		$run_delete = mysqli_query($con,$delete_cat); 
		
		}
		header("location:category.php");

?>

<?php } ?>