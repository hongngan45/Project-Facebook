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
                    <h2 style=" margin-left:400px ; margin-top:30px;color:green">Thêm  của Người sùng </h2>
                    <form action="process-add-user.php" method="post">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã người dùng </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtma">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtten" name="txtten">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtemail" name="txtemail">
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Gioi Tính </label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtgioitinh" name="txtgioitinh">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày sinh </label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdate" name="txtdate">
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày tham gia FaceBook </label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdatejoin" name="txtdatejoin">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-warning" name="btnSave">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>