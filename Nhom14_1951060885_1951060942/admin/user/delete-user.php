<?php
 
  $Id= $_GET['id'];


   
    $conn = mysqli_connect('localhost','root','','1951060885_facebook');
     if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
   $sql = "DELETE  FROM users where user_id='$Id' ";
   $number = mysqli_query($conn,$sql);
   if($number > 0){
       header("location:quanlynguoidung.php");

   }else{
       header("location:error.php");
   }
   mysqli_close($conn);

?>