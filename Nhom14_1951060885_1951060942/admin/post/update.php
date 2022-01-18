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
  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style=" margin-left:400px ; margin-top:30px;color:green">Cập nhật thông tin nhân viên</h2>
                    <form action="process-update-post.php" method="post">
                    <?php 
        $postId = $_GET['id'];
    
      require_once "../connect.php"; 
    
        $conn = mysqli_connect('localhost','root','','1951060885_facebook');
      if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    };  

        $sql = "select * from user_post  where post_id = '$postId'";
        $result = mysqli_query($conn, $sql);
        $each = mysqli_fetch_array($result);
    ?>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã bài viết</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtmapost" name="txtmapost"value="<?php echo $each['post_id']?>" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã người dùng</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtma"value="<?php echo $each['user_id']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Caption</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtcap" name="txtcap"value="<?php echo $each['post_txt']?>">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtpic" name="txtpic"value="<?php echo $each['post_pic']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Thời gian đăng bài viết</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtime" name="txtime"value="<?php echo $each['post_time']?>">
                            </div>
                        </div>
                               <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Quyền riêng tư</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtpro" name="txtpro"value="<?php echo $each['priority']?>">
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