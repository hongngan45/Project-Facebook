<?php
 
  $post_id= $_GET['id'];


   
    $conn = mysqli_connect('localhost','root','','1951060885_facebook');
     if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
   $sql = "DELETE  FROM user_post where post_id='$post_id'";
   $number = mysqli_query($conn,$sql);
   if($number > 0){
       header("location: quanlybaidang.php");

   }else{
       header("location:error.php");
   }
   mysqli_close($conn);

?>