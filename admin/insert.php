<?php
session_start();
include_once "../connection.php";
include_once "header.php";
if (isset($_POST['create'])) {

	$post_title = str_replace("'", "\'", $_POST['post_title']);
	$post_author = str_replace("'", "\'", $_POST['post_author']);
	$post_date = date('d-m-Y');
	$post_keywords = str_replace("'", "\'", $_POST['post_keywords']);
	$post_image = $_FILES['post_image']['name'];
	$post_image_tmp = $_FILES['post_image']['tmp_name'];
	$img_details = $_FILES['img_details']['name'];
	$img_details_tmp = $_FILES['img_details']['tmp_name'];
	$post_content = str_replace("'", "\'", $_POST['post_content']);
	$category_id = str_replace("'", "\'", $_POST['category_id']);

	if ($post_title == '' or $post_author == '' or $post_keywords == '' or $post_content == '' or $category_id == '' or $category_id == 0) {
		echo "<script>alert('Vui lòng điền đầy đủ thông tin')</script>";
		// exit();
	} else {

		move_uploaded_file($post_image_tmp, "img_upload/$post_image");
		move_uploaded_file($img_details_tmp, "img_upload/$img_details");
		$insert_posts = "insert into posts (post_title,post_date,post_author,post_keywords,post_image,img_details,post_content,category_id) values ('$post_title','$post_date','$post_author','$post_keywords','$post_image','$img_details','$post_content','$category_id')";
		
		$run_posts = mysqli_query($con, $insert_posts);

		echo "<script>alert('Thêm thành công!')</script>";

		echo "<script>window.open('table.php?insert_post','_self')</script>";
	}
}

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="post" enctype="multipart/form-data">

				<table class="table__center" width="100%" bgcolor="#FFFFFF">

					<tr>
						<td colspan="6" align="center">
							<div class="py-3"></div>
						</td>
					</tr>

					<tr>
						<td><strong>Tiêu đề : </strong></td>
						<td><input class="form-control" type="text" name="post_title" /></td>
					</tr>

					<tr>
						<td><strong>Tác giả : </strong></td>
						<td><input class="form-control" type="text" name="post_author" /></td>
					</tr>
					<tr>
						<td><strong>Từ khóa : </strong></td>
						<td><input class="form-control" type="text" name="post_keywords" /></td>
					</tr>
					<tr>
						<td><strong>Danh mục : </strong></td>
						<td>
							<select name="category_id" id="" class="form-control">
								<option value="0">---Chọn category---</option>
								<?php
								$get_categories = "select * from categories";

								$run_categories = mysqli_query($con, $get_categories);
								$i = 1;
								while ($row_categories = mysqli_fetch_array($run_categories)) {
									echo "<option value=" . $row_categories['cat_id'] . ">" . $row_categories['cat_title'] . "</option>";
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><strong>Ảnh đại diện : </strong></td>
						<td>
							<div class="d-flex align-items-center">
								<input class="form-control mr-5" type="file" name="post_image" multiple />
							</div>
						</td>
					</tr>
					<tr>
						<td><strong>Ảnh chi tiết : </strong></td>
						<td>
							<div class="d-flex align-items-center">
								<input class="form-control mr-5" type="file" name="img_details" multiple />
							</div>
						</td>
					</tr>
					<tr>
						<td><strong>Nội dung : </strong></td>

						<td><textarea class="form-control" name="post_content" rows="15"></textarea></td>

					</tr>

					<tr>
						<td colspan="6" align="center">
							<button class="btn btn-success mt-3" type="submit" name="create">Thêm</button>
						</td>
					</tr>

				</table>

			</form>
		</div>
	</div>
</div>
<?php include_once "footer.php"; ?>