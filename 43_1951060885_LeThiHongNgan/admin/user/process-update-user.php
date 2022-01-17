<?php

   // xử lý giá trị Gửi tới



 
   $Id       = $_POST['txtma'];
   $Name      = $_POST['txtten'];
   $Email = $_POST['txtemail'];
   
   $Gioitinh = $_POST['txtgioitinh'];
   $Ngaysinh     = $_POST['txtdate'];
   $Ngaythamgiafb     = $_POST['txtdatejoin'];

  
  // Bước 01: Kết nối Database Server
  $conn = mysqli_connect('localhost','root','','1951060885_facebook');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }
  //Bước 2: Thực hiện truy vấn
  $sql = "update users
  set user_id= '$Id',
  Name='$Name',
 
  Email ='$Email',
  Gender = '$Gioitinh',
  Birthday_Date ='$Ngaysinh',
  FB_Join_Date = '$Ngaythamgiafb',
  where user_id= $Id";
 
 // Bước 3: Xử lý kết quả
  mysqli_query($conn, $sql);
  $loi = mysqli_error($conn);
  echo $loi; 
  mysqli_close($conn);
//echo'có chạy được tới đây không'

echo '<a href="quanlynguoidung.php">Quay lại</a>'; 

   
?>

