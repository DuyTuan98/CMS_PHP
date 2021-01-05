<?php
  include_once "connection.php";
   if(isset($_GET['data']) && $_GET['data']!=""){

        $key=trim($_GET['data']); // nhận giá trị từ ajax gửi qua để xử lý
        $query="SELECT * FROM posts Where post_title like '%$key%' LIMIT 5";

        $result = $con->query($query);
        $str="";
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        	$post_id = $row['post_id'];
             $post_image = $row['post_image'];
             $post_title = $row['post_title'];
          $str ="<div class='search_v shadow py-2'>
          <a class='search_va' href='blog-details.php?post=$post_id'>
          <img class='search_vimg'src='img/$post_image'> <strong class='search_vst search__name'>".$post_title."</strong>
          </br>
          </div> 
          </a>";
        	echo $str;
        }

        mysqli_close($con);

    }

    ?>