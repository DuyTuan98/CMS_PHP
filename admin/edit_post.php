<?php
session_start();
include_once "header.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php
			include("../connection.php");

			if (isset($_GET['edit_post'])) {

				$edit_id = $_GET['edit_post'];

				$select_post = "SELECT * from posts where post_id='$edit_id'";

				$run_query = mysqli_query($con, $select_post);

				while ($row_post = mysqli_fetch_array($run_query)) {

					$post_id = $row_post['post_id'];
					$title = $row_post['post_title'];
					$post_cat = $row_post['category_id'];
					$author = $row_post['post_author'];
					$keywords = $row_post['post_keywords'];
					$image = $row_post['post_image'];
					$img_details = $row_post['img_details'];
					$content = $row_post['post_content'];
					$post_date = $row_post['post_date'];
				}
			}


			?>
			<form method="post" enctype="multipart/form-data">

				<table class="table__center" width="100%" bgcolor="#FFFFFF">

					<tr>
						<td colspan="6" align="center">
							<div class="py-3"></div>
						</td>
					</tr>

					<tr>
						<td><strong>Tiêu đề : </strong></td>
						<td><input class="form-control" type="text" name="post_title" value="<?php echo $title; ?>" /></td>
					</tr>
					<tr>
						<td><strong>Tác giả : </strong></td>
						<td><input class="form-control" type="text" name="post_author" value="<?php echo $author; ?>" /></td>
					</tr>
					<tr>
						<td><strong>Từ khóa : </strong></td>
						<td><input class="form-control" type="text" name="post_keywords" value="<?php echo $keywords; ?>" /></td>
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
									if ($row_categories['cat_id'] == $post_cat) {
										echo "<option value='" . $row_categories['cat_id'] . "' selected>" . $row_categories['cat_title'] . "</option>";
									} else {
										echo "<option value=" . $row_categories['cat_id'] . ">" . $row_categories['cat_title'] . "</option>";
									}
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><strong>Ảnh đại diện: </strong></td>
						<td>
							<div class="d-flex align-items-center">
								<input class="form-control mr-5" type="file" multiple name="post_image" style="width: 50% !important" />
								<img src="img_upload/<?php echo $image; ?>" width="60" height="60" />
							</div>
						</td>
					</tr>
					<tr>
						<td><strong>Ảnh chi tiết: </strong></td>
						<td>
							<div class="d-flex align-items-center">
								<input class="form-control mr-5" type="file" multiple name="img_details" style="width: 50% !important" />
								<img src="img_upload/<?php echo $img_details; ?>" width="60" height="60" />
							</div>
						</td>
					</tr>
					<tr>
						<td><strong>Nội dung : </strong></td>

						<td><textarea class="form-control" name="post_content" rows="15"><?php echo $content; ?></textarea></td>

					</tr>

					<tr>
						<td colspan="6" align="center">
							<button class="btn btn-success mt-3" type="submit" name="update">Cập nhật</button>
						</td>
					</tr>

				</table>

			</form>
		</div>
	</div>
</div>
<?php
if (isset($_POST['update'])) {

	$update_id = $post_id;
	$post_title = str_replace("'", "\'", $_POST['post_title']);
	$post_date = date('d-m-Y');
	$post_author = str_replace("'", "\'", $_POST['post_author']);
	$post_keywords = str_replace("'", "\'", $_POST['post_keywords']);
	$post_image = $_FILES['post_image']['name'];
	$post_image_tmp = $_FILES['post_image']['tmp_name'];
	$img_details = $_FILES['img_details']['name'];
	$img_details_tmp = $_FILES['img_details']['tmp_name'];
	$post_content = str_replace("'", "\'", $_POST['post_content']);
	$category_id = str_replace("'", "\'", $_POST['category_id']);
	if ($post_title == '' or $post_cat == null or $post_author == '' or $post_keywords == '' or $post_content == '') {
		echo "<script>alert('Vui lòng điền đầy đủ thông tin')</script>";
		exit();
	} else {

		move_uploaded_file($post_image_tmp, "img_upload/$post_image");
		move_uploaded_file($img_details_tmp, "img_upload/$img_details");
		$update_posts = "UPDATE posts set post_title='$post_title',post_date='$post_date',post_author='$post_author',post_keywords='$post_keywords',post_content='$post_content',category_id='$category_id'";
		if ($post_image != '') {
			$update_posts .= ",post_image='$post_image'";
		}
		if ($img_details != '') {
			$update_posts .= ",img_details='$img_details'";
		}
		$update_posts .= " where post_id='$update_id'";

		$run_update = mysqli_query($con, $update_posts);

		echo "<script>alert('Cập nhật thành công!')</script>";

		echo "<script>window.open('table.php?view_posts','_self')</script>";
	}
}

?>

<?php include_once "footer.php"; ?>