<!DOCTYPE html>
<html lang="en">

<head>
  <title> Quản trị Admin| Quan ly nguoi dung</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../css/hai.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
 
  
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }



  
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out '>Lê Thị Hồng Ngần</i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-name"><b> <i class="bi bi-house-door"></i>Home</b></p>
        
      </div>
    </div>
    <hr>
    <ul class="app-menu">
    
    
      <li><a style="text-decoration: none;"  class="app-menu__item active" href="../user/quanlynguoidung.php"><i class="bi bi-person-circle"></i>
          <span class="app-menu__label">Quan lý người dùng</span></a></li>
      <li><a style="text-decoration: none;"  class="app-menu__item " href="../post/quanlybaidang.php"><i class="bi bi-file-earmark-post"></i><span
            class="app-menu__label">Quản lý bài viết</span></a></li>
      <li><a style="text-decoration: none;"  class="app-menu__item " href=""><i class="bi bi-chat-left-dots"></i><span class="app-menu__label">Quản lý bình luận </span></a>
      </li>
       <li><a style="text-decoration: none;"  class="app-menu__item" href="table-data-oder.html"><i class="bi bi-image"></i><span
            class="app-menu__label">Quản lý ảnh tải lên</span></a></li>
    
      
      <li><a style="text-decoration:none;" class="app-menu__item" href="#"><i class="bi bi-gear"></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <h1> Danh sách người dùng </h1>
  </div>
     <div class="container">
        <h3 style=" margin-left:400px ; margin-top:30px">Quản lý người dùng </h3>
        <button type="button" class="btn btn-primary"><a href="add.php"  style="display: block; color: white;text-decoration:none">Thêm</a></button>
      
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã người dùng</th>
      <th scope="col">Họ và tên </th>
      <th scope="col">Email</th>
    
      <th scope="col">Gioi tính</th>
      <th scope="col">Ngày sinh</th>
        <th scope="col">Ngày tham gia facebook</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
   
      <?php
            
            $conn = mysqli_connect('localhost','root','','1951060885_facebook');
            if(!$conn){
                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
            }
             
               $sql = "SELECT * FROM users";
               $result = mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                        <tr>
                          <th scope="row"><?php echo $row['user_id']  ;      ?></th>
                           <td><?php echo $row['Name']  ;      ?></td>
                          <td><?php echo $row['Email']  ;      ?></td>
                         
                          <td><?php echo $row['Gender']  ;      ?></td>
                          <td><?php echo $row['Birthday_Date']  ;      ?></td>
                            <td><?php echo $row['FB_Join_Date']  ;      ?></td>
                          <td><a href="update.php?id=<?php echo $row['user_id'] ?>"><span class="material-icons-outlined">edit</span></a>
                          </td>
                          <td><a href="delete-user.php?id=<?php echo $row['user_id'] ?>"><span class="material-icons-outlined">delete</span></a>
                         </td>
                          
                          
                           </tr>
        <?php
                    }
                }
       ?>
    
  </tbody>
    </table>
    </div>
</main>
  <!--
MODAL
-->



  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
 
</body>

</html>