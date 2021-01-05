<?php 
session_start();
include_once "header.php";
 ?>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Thể loại</h1>
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive table-hover">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">Tiêu đề</th>
              <th class="text-center">Thao tác</th>
            </tr>
          </thead>
          <tbody>
           <?php 
             include_once "../connection.php";
             $get_posts = "SELECT * from categories";
             $run_posts = mysqli_query($con,$get_posts); 
             $i=1;
             while ($row = mysqli_fetch_array($run_posts)){
             $cat_id = $row['cat_id'];
             $cat_title = $row['cat_title'];
           ?>
           <tr>
            <td class="text-center"><?php echo $cat_id  ?></td>
            <td class="text-center"><?php echo $cat_title ?></td>
     
            <td style="text-align: center;">
              <div class="d-flex justify-content-center align-items-center">
                <a href="edit_cat.php?edit_cat=<?php echo $cat_id; ?>" class="btn btn-success mr-3">Sửa</a>
                <a onclick="return confirm('Bạn có thực sự muốn xóa nó ?');" href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>" class="btn btn-danger">Xóa</a>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php include_once "footer.php"; ?>