<?php




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
  // Bước 2: Xử lý truy vấn
   $sql = "INSERT into users(user_id,Name,Email,Gender,Birthday_Date,FB_Join_Date)
   values  ('$Id ', '$Name', '$Email', '$Gioitinh', '$Ngaysinh ','$Ngaythamgiafb')";
   $ketqua = mysqli_query($conn, $sql);
   $loi = mysqli_error($conn);
    echo $loi;
   
   
    if($ketqua > 0){      
       header("location: quanlynguoidung.php");
     }else{
        header("location: error.php"); 
    }
        mysqli_close($conn);
    ?>


