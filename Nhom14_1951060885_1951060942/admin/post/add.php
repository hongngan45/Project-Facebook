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
                    <h2 style=" margin-left:400px ; margin-top:30px;color:green">Thêm  bài viết </h2>
                    <form action="process-add-post.php" method="post">
                           <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã bài viết</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtmapost"value="" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã người dùng</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtmaid" name="txtma"value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Caption</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtcaption" name="txtcap"value="">
                           </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtpicture" name="txtpic"value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Thời gian đăng bài viết</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdatetime" name="txtime"value="">
                            </div>
                        </div>
                               <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Quyền riêng tư</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtprio" name="txtpro"value="">
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