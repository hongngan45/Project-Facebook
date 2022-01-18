<?php

   // xử lý giá trị Gửi tới



   $postId       = $_POST['txtmapost'];
   $Id       = $_POST['txtma'];
   $Postxt      = $_POST['txtcap'];
   $Postpic = $_POST['txtpic'];
   
   $Posttime = $_POST['txtime'];
   $priority     = $_POST['txtpro'];

    require_once "../connect.php"; 
  $conn = mysqli_connect('localhost','root','','1951060885_facebook');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }

  $sql = "update user_post
  set post_id= '$postId',
  user_id= '$Id',
  post_txt='$Postxt',
 
  post_pic ='$Postpic',
  post_time = '$Posttime',
  priority' ='$priority ',
 
  where post_id= $postId";
 

  mysqli_query($conn, $sql);
  $loi = mysqli_error($conn);
  echo $loi; 
  mysqli_close($conn);


echo '<a href="quanlybaidang.php">Quay lại</a>'; 

   
?>

