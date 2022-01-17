<?php
session_start();
if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $pass  = $_POST['password'];

    require_once 'connect.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "SELECT * FROM admin_info WHERE Username = '$username' AND Password='$pass'";

    $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
           
            $_SESSION['isSignInOK'] = $username;
            header("location: user/quanlynguoidung.php");
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: signin.php?error=$error"); 
        }
    }

    ?>
