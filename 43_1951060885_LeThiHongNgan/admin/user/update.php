<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class="mt-4">
    <div class="header">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style=" margin-left:400px ; margin-top:30px;color:green">Cập nhật thông tin nhân viên</h2>
                    <form action="process-update-user.php" method="post">
                    <?php 
        $Id = $_GET['id'];
  
        $conn = mysqli_connect('localhost','root','','1951060885_employee');
      if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    };  

        $sql = "select * from users where user_id = '$Id'";
        $result = mysqli_query($conn, $sql);
        $each = mysqli_fetch_array($result);
    ?>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã người dùng </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtma" value="<?php echo $each['user_id']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtten" name="txtten" value="<?php echo $each['Name']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtemail" name="txtemail" value="<?php echo $each['Email']?>">
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Gioi Tính </label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtgioitinh" name="txtgioitinh" value="<?php echo $each['Gender']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày sinh </label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdate" name="txtdate" value="<?php echo $each['Birthday_Date']?>">
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày tham gia FaceBook </label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdatejoin" name="txtdatejoin" value="<?php echo $each['FB_Join_Date']?>">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-warning" name="btnSave">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>