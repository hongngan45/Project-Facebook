<?php

   // xử lý giá trị Gửi tới




   $postId       = $_POST['txtmapost'];
   $ID       = $_POST['txtma'];
   $Postxt      = $_POST['txtcap'];
   $Postpic = $_POST['txtpic'];
   
   $Posttime = $_POST['txtime'];
   $priority     = $_POST['txtpro'];
  
  // Bước 01: Kết nối Database Server
  $conn = mysqli_connect('localhost','root','','1951060885_facebook');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }

   $sql = "INSERT into user_post(post_id,user_id,post_txt,post_pic,post_time,priority)
   values  ('$postId ', '$ID', ' $Postxt ', '$Postpic ', '$Posttime ',' $priority  ')";
   $ketqua = mysqli_query($conn, $sql);
   $loi = mysqli_error($conn);
    echo $loi;
   
   
    if($ketqua > 0){      
       header("location: quanlybaidang.php");
     }else{
        header("location: error.php"); 
    }
        mysqli_close($conn);
    ?>


