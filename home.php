<?php
  session_start();
 

  include("connect.php");
      include("processlogin.php");

      if(isset($_SESSION['mybook_userid']) && is_numeric($_SESSION['mybook_userid']))
      {
        $id = $_SESSION['mybook_userid'];
        $login = new Login();
        $result = $login-> check_login($id);


        if($result)
        {
               
        }else {
            header("Location: login.php");
            die;
        }
      }
      else
      {
        header("Location: login.php");
        die;
      }
     

?>

<!DOCTYPE html>
<html lang="en" id="facebook">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/main-style.css">
    <link rel="stylesheet" href="icon/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="header-left-icon">
                <a href="#">
                    <img src="img/icon/logo-facebook.png" alt="">
                </a>
            </div>
            <div class="header-left-search">
              <input type="text" placeholder="Tìm kiếm trên Facebook" >
           </div>
        </div>
        <div class="header-mid">
            <ul class="header-mid-list">
                <li class="header-mid-list-item has-index">
                    
                   <a href="" class="has-hover-icon"> <i class="fas fa-home has-index-icon"></i></a>
                   <div class="header-right-list-item-number note5">9+</div>
                   <div class="header-mid-list-item-dropdown">
                       Trang chủ
                   </div>
                </li>
                <li class="header-mid-list-item ">
                    <a href="" class="has-hover-icon"> <i class="fas fa-pager"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                        Trang
                    </div>
                </li>
                <li class="header-mid-list-item">
                    <a href="" class="has-hover-icon"><i class="fas fa-tv"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                        Video
                    </div>
                </li>
                <li class="header-mid-list-item">
                    <a href="" class="has-hover-icon"> <i class="fas fa-shopping-cart"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                       Shop
                    </div>
                </li>
                <li class="header-mid-list-item">
                    <a href="" class="has-hover-icon"><i class="fas fa-users"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                       Group
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <ul class="header-right-list">
                <li class="header-right-list-item note3">
                   <a  class= "note1"> <div class="header-right-list-item-img ">
                      <img src="img/avt-user/admin-avt.jpg" alt="" >
                    </div>
                    <div class="header-right-list-item-nameuser">Hong Ngan</div></a>
                    <div class="header-right-list-item-hover-dropdown note7">Admin-User</div>
                </li>
                <li class="header-right-list-item ">
                   <a > <i class="fas fa-list nut-list"  onclick="hamlist()"></i></a>
                   <div class="header-right-list-item-hover-dropdown">List friend</div>
                   <div class="header-right-list-item-dropdown4 noidung-nutlist">
                       <div class="header-right-list-item-dropdown4-content">
                           <div class="header-right-list-item-dropdown4-content-title">New Friend</div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-one.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Mạnh Nguyễn</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-two.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Phạm Ly</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác Nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-three.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Nguyễn Thùy Ninh</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác Nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-ten.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Phạm Nguyễn Hải Nam </div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button"onclick="likeFun(this)">Xác Nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-four.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Nguyễn Hải Quân</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                        
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-six.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Đỗ Thanh Phương</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-seven.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Nu Hakuta</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-eight.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Mai Đạt</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-nine.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Nam</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown4-content-item">
                                <div class="header-right-list-item-dropdown4-content-item-img">
                                    <img src="img/avt-user/user-11.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown4-content-item-content">
                                    <div class="header-right-list-item-dropdown4-content-item-content-name">Long Đỗ</div>
                                    <div class="header-right-list-item-dropdown4-content-item-content-button">
                                        <button class="yes-button" onclick="likeFun(this)">Xác nhận</button>
                                        <button class="No-button" onclick="dontlike(this)">Xóa</button>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
                </li>
                <li class="header-right-list-item dropbtn" onclick="myFunction()">
                    <a><i class="fab fa-facebook-messenger"></i></a>
                    <div class="header-right-list-item-number">7</div>
                    <div class="header-right-list-item-dropdown " id="myDropdown">
                        <div class="header-right-list-item-dropdown-content">
                            <div class="header-right-list-item-dropdown-content-title">Messenger</div>
                            <div class="header-right-list-item-dropdown-content-search">
                                <input type="text" placeholder="Tìm Kiếm trong Messenger ">
                            </div>
                        
                          
                            <div class="header-right-list-item-dropdown-content-item">
                                <div class="header-right-list-item-dropdown-content-item-avatar">
                                    <img src="img/avt-user/user-one.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown-content-item-mes">
                                    <div class="header-right-list-item-dropdown-content-item-mes-nameclass">Mạnh Nguyễn</div>
                                    <div class="header-right-list-item-dropdown-content-item-mes-content">hongngan xinhdep</div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown-content-item">
                                <div class="header-right-list-item-dropdown-content-item-avatar">
                                    <img src="img/avt-user/user-two.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown-content-item-mes">
                                    <div class="header-right-list-item-dropdown-content-item-mes-nameclass">Phạm Ly</div>
                                    <div class="header-right-list-item-dropdown-content-item-mes-content dont-read">Hngan xinh đẹp quá ta</div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown-content-item">
                                <div class="header-right-list-item-dropdown-content-item-avatar">
                                    <img src="img/avt-user/user-three.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown-content-item-mes">
                                    <div class="header-right-list-item-dropdown-content-item-mes-nameclass">Nguyễn thuy Ninh</div>
                                    <div class="header-right-list-item-dropdown-content-item-mes-content">Hngan tuyet voi</div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown-content-item">
                                <div class="header-right-list-item-dropdown-content-item-avatar">
                                    <img src="img/avt-user/user-four.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown-content-item-mes">
                                    <div class="header-right-list-item-dropdown-content-item-mes-nameclass">Nguyễn Hải Quân</div>
                                    <div class="header-right-list-item-dropdown-content-item-mes-content">hngan xinh dep</div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown-content-item">
                                <div class="header-right-list-item-dropdown-content-item-avatar">
                                    <img src="img/avt-user/user-six.jpg" alt="">
                                </div>
                                <div class="header-right-list-item-dropdown-content-item-mes">
                                    <div class="header-right-list-item-dropdown-content-item-mes-nameclass">Đỗ Thanh Phương</div>
                                    <div class="header-right-list-item-dropdown-content-item-mes-content">hngan xinh dep</div>
                                </div>
                            </div>
                            <div class="header-right-list-item-dropdown-content-end">
                                <a href="">Xem tất cả trong Messenger</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="header-right-list-item-hover-dropdown">Messenger</div>
                </li>
                <li class="header-right-list-item nut_dropdown " onclick="hamDropdown()">
                    <a ><i class="fas fa-bell  " ></i></a>
                    <div class="header-right-list-item-number note4">10</div>
                    
                    <div class="header-right-list-item-hover-dropdown">Thông Báo</div>
                    <div class="header-right-list-item-dropdown2 noidung_dropdown" >
                      <div class="header-right-list-item-dropdown2-content">
                          <div class="header-right-list-item-dropdown2-content-title">Thông Báo</div>
                          <div class="header-right-list-item-dropdown2-content-item">
                              <div class="header-right-list-item-dropdown2-content-item-img">
                                  <img src="img/avt-user/user-15.jpg" alt="">
                              </div>
                              <div class="header-right-list-item-dropdown2-content-item-content">
                                 
                                  <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Tuan Anh</span>đã thích bài viết của bạn</div>
                              </div>
                          </div>
                          <div class="header-right-list-item-dropdown2-content-item">
                            <div class="header-right-list-item-dropdown2-content-item-img">
                                <img src="img/avt-user/user-one.jpg" alt="">
                            </div>
                            <div class="header-right-list-item-dropdown2-content-item-content">
                               
                                <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Mạnh Nguyễn</span> đã mời bạn vào học zoom cùng anh ấy</div>
                            </div>
                        </div>
                        <div class="header-right-list-item-dropdown2-content-item">
                            <div class="header-right-list-item-dropdown2-content-item-img">
                                <img src="img/avt-user/user-two.jpg" alt="">
                            </div>
                            <div class="header-right-list-item-dropdown2-content-item-content">
                               
                                <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Phạm Ly</span> đã thả tim ảnh của bạn</div>
                            </div>
                        </div>
                        <div class="header-right-list-item-dropdown2-content-item">
                            <div class="header-right-list-item-dropdown2-content-item-img">
                                <img src="img/avt-user/user-three.jpg" alt="">
                            </div>
                            <div class="header-right-list-item-dropdown2-content-item-content">
                               
                                <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Nguyễn thùy Ninh</span> Đã thích hình ảnh của bạn :Your cake</div>
                            </div>
                        </div>
                        <div class="header-right-list-item-dropdown2-content-item">
                            <div class="header-right-list-item-dropdown2-content-item-img">
                                <img src="img/avt-user/user-six.jpg" alt="">
                            </div>
                            <div class="header-right-list-item-dropdown2-content-item-content">
                               
                                <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Đỗ thanh Phương</span> đã mời bạn xem live stream của cô ấy</div>
                            </div>
                        </div> <div class="header-right-list-item-dropdown2-content-item">
                            <div class="header-right-list-item-dropdown2-content-item-img">
                                <img src="img/avt-user/user-eight.jpg" alt="">
                            </div>
                            <div class="header-right-list-item-dropdown2-content-item-content">
                               
                                <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Mai Đạt</span> đã thích hình ảnh của bạn</div>
                            </div>
                        </div> <div class="header-right-list-item-dropdown2-content-item">
                            <div class="header-right-list-item-dropdown2-content-item-img">
                                <img src="img/avt-user/user-nine.jpg" alt="">
                            </div>
                            <div class="header-right-list-item-dropdown2-content-item-content">
                               
                                <div class="header-right-list-item-dropdown2-content-item-content-text"> <span style="font-weight: 600; color: white;">Nam</span> đã mời bạn xem live stream của anh ấy</div>
                            </div>
                        </div>
                      </div>
                    </div>
                    

                </li>
                <li class="header-right-list-item nut-more" onclick="hammore()">
                    <a  class="note2"><i class="fas fa-sort-down" ></i></a>
                    <div class="header-right-list-item-hover-dropdown note6">More</div>
                    <div class="header-right-list-item-dropdown3  noidung-nutmore" >
                        <div class="header-right-list-item-dropdown3-content">
                            
                            <div class="header-right-list-item-dropdown3-content-item">
                                <img style=" border-radius: 30%; height: 50px;width: 50px;margin-top: 5px ;margin-right:5px" src="img/avt-user/admin-avt.jpg" alt=""> &emsp;Hong Ngan
                                </div>
                                <div class="main-right-list-item-line"></div>
                            <div class="header-right-list-item-dropdown3-content-item">
                                <i class="fas fa-cog"></i>&emsp; Cài Đặt& Quyền riêng tư
                            </div>
                            <div class="header-right-list-item-dropdown3-content-item">
                                <i class="fas fa-question-circle"></i> &emsp;Trợ giúp & Hỗ trợ
                            </div>
                            <div class="header-right-list-item-dropdown3-content-item">
                                <i class="bi bi-moon-fill"></i> &emsp;Màn Hình & Trợ Năng
                            </div>
                            
                            
                            <div class="header-right-list-item-dropdown3-content-item">
                                <i class="fas fa-sign-out-alt"></i>&emsp; Đăng Xuất
                            </div>

                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="mid">
    <div class="main" id="mydiv">
        <div class="main-left" >
            <ul class="main-left-list-support" >
                
                
                <li class="main-left-list-support-item">
                    <img style=" border-radius: 50%; height: 30px;width: 30px;margin-top: 5px ;margin-right:5px" src="img/avt-user/admin-avt.jpg">
                    <a href="#">Hong Ngan</a>
                </li>
                <li class="main-left-list-support-item" >
                     <img style="height: 36px;width: 36px;" src="img/icon/friend.png" alt="">
                     <a href="#">Bạn Bè</a>
                </li>
               
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/group.png" alt="">
                    <a href="#">Nhóm</a>
                </li>
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/market.png" alt="">
                    <a href="#">Marketplace</a>
                </li>
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/watch.png" alt="">
                    <a href="#">Watch</a>
                </li>
                
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/game.png" alt="">
                    <a href="#">Chơi game</a>
                </li>
               
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/oclock.png" alt="">
                    <a href="#">Kỉ niệm</a>
                </li>
          >
              
                <li class="main-left-list-support-item seemore-btn">
                    <a href="" >Xem Thêm</a>

                </li>
                <li class="main-left-list-support-line"></li>
                <div class="main-left-list-support-text">
                <h4  style="font-size: 16px;color: rgb(113, 109, 109); ">Lối tắt của bạn</h4>
                <a class="main-left-list-support-fix" href="#">Chỉnh sửa</a>
                </div>
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/web-img.jpg" alt="">
                    <a href="#">Cộng đồng FrontEnd(HTML/CSS/JS) Việt Nam</a>
                </li>
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/js-img.jpg" alt="">
                    <a href="#">Cộng đồng Javascript</a>
                </li>
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/delete-img.jpg" alt="">
                    <a href="#">Xóa mù lập trình</a>
                </li>
                <li class="main-left-list-support-item">
                    <img style="height: 36px;width: 36px;" src="img/icon/english-img.png" alt="">
                    <a href="#">Nghiện Từ Vựng Tiếng Anh (XGR)</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-mid">
        <div class="main-mid-news">
            <div class="main-mid-news-item">
                <div class="main-mid-news-item-img">
                   <p> <img src="img/avt-user/admin-avt.jpg" alt=""></p>
                </div>
                <div class="main-mid-news-item-icon">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="main-mid-news-item-nameuser">
                    Tạo tin
                </div>
            </div>
            <div class="main-mid-news-item">
                <div class="main-mid-news-item-img">
                   <p> <img src="img/Story-Facebook/user-story-eight.jpg" alt=""></p>
                </div>
                <div class="main-mid-news-item-avatar">
                    <img src="img/avt-user/admin-avt.jpg" alt="">
                </div>
                <div class="main-mid-news-item-nameuser">
                   Hong Ngan
                </div>
            </div>
            <div class="main-mid-news-item">
                <div class="main-mid-news-item-img">
                   <p> <img src="img/Story-Facebook/user-story-five.jpg" alt=""></p>
                </div>
                <div class="main-mid-news-item-avatar">
                    <img src="img/avt-user/user-13.jpg" alt="">
                </div>
                <div class="main-mid-news-item-nameuser">
                   Đỗ Nhật Trường
                </div>
            </div>
            <div class="main-mid-news-item">
                <div class="main-mid-news-item-img">
                   <p> <img src="img/Story-Facebook/user-story-six.jpg" alt=""></p>
                </div>
                <div class="main-mid-news-item-avatar">
                    <img src="img/avt-user/user-12.jpg" alt="">
                </div>
                <div class="main-mid-news-item-nameuser">
                    Tuấn Dương
                </div>
            </div>
            <div class="main-mid-news-item">
                <div class="main-mid-news-item-img">
                   <p> <img src="img/Story-Facebook/user-story-seven.jpg" alt=""></p>
                </div>
                <div class="main-mid-news-item-avatar">
                    <img src="img/Story-Facebook/user-story-seven.jpg" alt="">
                </div>
                <div class="main-mid-news-item-nameuser">
                    Soo hee
                </div>
            </div>
            
        </div>
        <div class="main-mid-uplatenews">
            <div class="main-mid-uplatenews-top">
                <div class="main-mid-uplatenews-top-avatar">
                    <img src="img/avt-user/admin-avt.jpg" alt="">
                </div>
                <div class="main-mid-uplatenews-top-button_uplate">
                    <button  id="myBtn">Hong ơi, Bạn đang nghĩ gì thế?</button>
                </div>
            </div>
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Tạo Bài Viết</h2>
                  </div>
                  <div class="model-main">
                      <div class="model-main-avatar">
                          <div class="model-main-avatar-img">
                              <img src="img/avt-user/admin-avt.jpg" alt="">
                          </div>
                          <div class="model-main-avatar-name">
                              <div class="model-main-avatar-name-user">
                                  Hong Ngan
                              </div>
                              <div class="model-main-avatar-name-select">
                                  <select>
                                      <option value="0">Bạn của bạn bè</option>
                                      <option value="34">Công Khai</option>
                                      <option value="46">Bạn bè</option>
                                      <option value="68">Bạn bè ngoại trừ</option>
                                      <option value="812">bạn bè cụ thể</option>
                                      <option value="1090">Chỉ mình tôi</option> 
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="model-main-text">
                          <input type="text" placeholder="Hong ơi , Bạn đang nghĩ gì?">
                      </div>
                  </div>
                  <div class="model-footer">
                      <div class="model-footer-addicon">
                          <div class="model-footer-addicon-text">Thêm vào bài viết</div>
                          <div class="model-footer-addicon-icon">
                            <i class="fas fa-images" style="color: rgb(15, 209, 31);"></i>
                            <i class="fas fa-user-plus" style="color: rgb(25, 99, 236);"></i>
                            <i class="far fa-smile" style="color: rgb(221, 221, 17);"></i>
                            <i class="fas fa-map-marker-alt" style="color: tomato;"></i>
                            <i class="fas fa-microphone" style="color: rgb(250, 12, 12);"></i>
                          </div>
                      </div>
                      <div class="model-footer-end">
                          <button>Đăng</button>
                      </div>
                  </div>
                    
                </div>
              
              </div>
            <div class="main-mid-uplatenews-bottom">
                  <div class="main-mid-uplatenews-bottom-item">
                    <i class="fas fa-video" style="color: red;"></i> Phát trực tiếp
                  </div>
                  <div class="main-mid-uplatenews-bottom-item">
                    <i class="fas fa-images" style="color: rgb(12, 223, 58);"></i> Ảnh/video
                  </div>
                  <div class="main-mid-uplatenews-bottom-item">
                    <i class="fas fa-smile" style="color: yellow;"></i> Cảm xúc/Hoạt Động
                  </div>
                  
                 
            </div>
            
        </div>
        <div class="main-mid-newslist">
           <div class="main-mid-newslist-item">
               <div class="main-mid-newslist-item-user">
                   <div class="main-mid-newslist-item-user-avatar">
                       <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                   </div>
                   <div class="main-mid-newslist-item-user-time_or_name">
                    <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                    <div class="main-mid-newslist-item-user-time_or_name-bottom">
                       <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                     
                   </div>
                   </div>
               </div>
               <div class="main-mid-newslist-item-content">
                  
                 Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
                  |Phim: Happniess
               </div>
               <div class="main-mid-newslist-item-picture">
                   <video controls>
                       <source src="img/avt-user/user-video-happyness.mp4">
                       </video>
               </div>
               <div class="main-mid-newslist-item-comment">
                   <div class="main-mid-newslist-item-comment-top">
                       <div class="main-mid-newslist-item-comment-top-number_tym"><i class="bi bi-suit-heart-fill"></i>Linh+120K</div>
                       <div class="double">
                         <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                         <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                       </div>
 
                   </div>

                   <div class="main-mid-newslist-item-comment-bottom">
                       <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                       <div class="couple">
                       <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                       <div class="panel">
                      
                          <div class="panel-request">
                              <div class="panel-request-avatar">
                                  <img src="img/avt-user/admin-avt.jpg" alt="">
                              </div>
                              <div class="panel-request-input">
                                  <input type="text" placeholder="Viết Bình luận ... ">
                              </div>
                          </div>

                       </div></div>
                       <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                   </div>
               </div>
           </div>
           <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-tradaocamxa.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Trà Đào Cam sả</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href=""> <span>2 Ngày</span> </a></div>
                    
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
                |Phim:Golbin(Yêu Tinh)
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls >
                <source src="img/avt-user/user-video-yeutinh.mp4" alt=" a beach">
                </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">100K like</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">581 comment</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 577 share</div>
                    </div>

                </div>
                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Like</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp;Comment</span></i>
                    <div class="panel">
                  
                     
                    
                     
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-post-us-uk.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Heart US-UK</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href=""> 2 ngày <span>trước</span> </a></div>
                    <!-- <div class="main-mid-newslist-item-user-time_or_name-palce"> <a href=""><span>tại</span> Nha Trang</a></div>
                    <div class="main-mid-newslist-item-user-time_or_name-name2"> <a href=""><span>with</span> Code with Quan</a></div> -->
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               Mỗi năm có 4 mùa , mùa xuân , mùa hạ , mùa thu và mua All I Want For Christmas Is You 
            </div>
            <div class="main-mid-newslist-item-picture">
                <img src="img/picture/beach.jpg" alt=" a beach">
            </div> 
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Bảo ngọc+8,4K like</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">239 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 239 share</div>
                    </div>

                </div>
                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Like</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp;Comment</span></i>
                    <div class="panel">
                       
                       
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-lazy.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href="">Hội người lười Việt Nam</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>16 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
            
            </div>
            <div class="main-mid-newslist-item-picture">
                
                    <img src="img/post-facebook/user-post-one.jpg">
                    
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">20,8K </div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">1,1K bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-vu.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Vũ.</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>7 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               Bước qua nhau /Vũ -Offcial MV: <a href="#">youtu.be/ixdSsW5n2rI</a> <br>
               Hẹn gặp mọi người tại phần tiếp theo của "Bước "
            </div>
            <div class="main-mid-newslist-item-picture">
                <img src="img/post-facebook/user-post-vu.jpg">
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">8.304 like</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls >
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls >
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls >
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls >
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls autoplay>
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls autoplay>
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
        <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avt-user/user-phimngontinh.jpg" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Phim Ngôn Tình - VNFD</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href="">  <span>29 Thg 11</span> </a></div>
                  
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
               
              Nhìn cách anh quan tâm chị có thể thấy anh thương chị đến mức nào <br>
               |Phim: Happniess
            </div>
            <div class="main-mid-newslist-item-picture">
                <video controls autoplay>
                    <source src="img/avt-user/user-video-happyness.mp4">
                    </video>
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">Linh+120K</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">253 bình luận</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 245 Lượt Chia Sẻ</div>
                    </div>

                </div>

                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Thích</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp; Bình Luận</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avt-user/user-one.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Mạnh nguyễn</div>
                               <div class="panel-comment-comment-content">sdskjdsd </div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-six.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Đỗ Thanh Phương</div>
                             <div class="panel-comment-comment-content">Dễ thương </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/admin-avt.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>
            <div class="main-mid-newslist-item">
               <div class="main-mid-newslist-item-user">
                   <div class="main-mid-newslist-item-user-avatar">
                       <img src="img/avtar-user/admin-avatar.png" alt="">
                   </div>
                   <div class="main-mid-newslist-item-user-time_or_name">
                    <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> dsjnsjldls</a></div>
                    <div class="main-mid-newslist-item-user-time_or_name-bottom">
                       <div class="main-mid-newslist-item-user-time_or_name-time"><a href=""> 10p <span>trước</span> </a></div>
                       <div class="main-mid-newslist-item-user-time_or_name-palce"> <a href=""><span>tại</span> Nha Trang</a></div>
                       <div class="main-mid-newslist-item-user-time_or_name-name2"> <a href=""><span>with</span> Code with Quan</a></div>
                   </div>
                   </div>
               </div>
               <div class="main-mid-newslist-item-content">
                   1 ngày đẹp trời tại 1 bãi biển nào đó ????
               </div>
               <div class="main-mid-newslist-item-picture">
                   <img src="img/picture/beach.jpg" alt=" a beach">
               </div>
               <div class="main-mid-newslist-item-comment">
                   <div class="main-mid-newslist-item-comment-top">
                       <div class="main-mid-newslist-item-comment-top-number_tym">10K tym</div>
                       <div class="double">
                         <div class="main-mid-newslist-item-comment-top-number_tym">33 comment</div>
                         <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 30 share</div>
                       </div>
 
                   </div>
                   <div class="main-mid-newslist-item-comment-bottom">
                       <i class="fas fa-heart" onclick="tymfun(this)"><span>&emsp;Tym</span></i>
                       <div class="couple">
                       <i class="fas fa-comment-alt accordion"><span>&emsp;Comment</span></i>
                       <div class="panel">
                          <div class="panel-comment">
                              <div class="panel-comment-img">
                                  <img src="img/avtar-user/avatar-story/avatar2.jpg" alt="">
                              </div>
                              <div class="panel-comment-comment">
                                  <div class="panel-comment-comment-name">Jame-odadi</div>
                                  <div class="panel-comment-comment-content">Thật là một nơi tuyệt zời ! ! !</div>

                                  
                              </div>
                              <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                              
                          </div>
                          <div class="panel-comment">
                            <div class="panel-comment-img">
                                <img src="img/avtar-user/story3.jpeg" alt="">
                            </div>
                            <div class="panel-comment-comment">
                                <div class="panel-comment-comment-name">kahjkja</div>
                                <div class="panel-comment-comment-content">Tôi rất muốn đến đây một lần, thật đẹp quá đi </div>

                                
                            </div>
                            <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                            
                        </div>
                          <div class="panel-request">
                              <div class="panel-request-avatar">
                                  <img src="img/avtar-user/admin-avatar.png" alt="">
                              </div>
                              <div class="panel-request-input">
                                  <input type="text" placeholder="Viết Bình luận ... ">
                              </div>
                          </div>

                       </div></div>
                       <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                   </div>
               </div>
           </div> <div class="main-mid-newslist-item">
            <div class="main-mid-newslist-item-user">
                <div class="main-mid-newslist-item-user-avatar">
                    <img src="img/avtar-user/admin-avatar.png" alt="">
                </div>
                <div class="main-mid-newslist-item-user-time_or_name">
                 <div class="main-mid-newslist-item-user-time_or_name-name"> <a href=""> Hong ngan</a></div>
                 <div class="main-mid-newslist-item-user-time_or_name-bottom">
                    <div class="main-mid-newslist-item-user-time_or_name-time"><a href=""> 10p <span>trước</span> </a></div>
                    <div class="main-mid-newslist-item-user-time_or_name-palce"> <a href=""><span>tại</span> Nha Trang</a></div>
                    <div class="main-mid-newslist-item-user-time_or_name-name2"> <a href=""><span>with</span> Vunn</a></div>
                </div>
                </div>
            </div>
            <div class="main-mid-newslist-item-content">
                1 ngày đẹp trời tại 1 bãi biển nào đó ????
            </div>
            <div class="main-mid-newslist-item-picture">
                <img src="img/picture/beach.jpg" alt=" a beach">
            </div>
            <div class="main-mid-newslist-item-comment">
                <div class="main-mid-newslist-item-comment-top">
                    <div class="main-mid-newslist-item-comment-top-number_tym">10K tym</div>
                    <div class="double">
                      <div class="main-mid-newslist-item-comment-top-number_tym">33 comment</div>
                      <div class="main-mid-newslist-item-comment-top-number_tym"> &emsp; 30 share</div>
                    </div>

                </div>
                <div class="main-mid-newslist-item-comment-bottom">
                    <i class="fas fa-heart" onclick="tymfun(this)"><span><i class="bi bi-suit-heart-fill"></i>emsp;Tym</span></i>
                    <div class="couple">
                    <i class="fas fa-comment-alt accordion"><span>&emsp;Comment</span></i>
                    <div class="panel">
                       <div class="panel-comment">
                           <div class="panel-comment-img">
                               <img src="img/avtar-user/avatar-story/avatar2.jpg" alt="">
                           </div>
                           <div class="panel-comment-comment">
                               <div class="panel-comment-comment-name">Jame-odadi</div>
                               <div class="panel-comment-comment-content">Thật là một nơi tuyệt zời ! ! !</div>

                               
                           </div>
                           <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                           
                       </div>
                       <div class="panel-comment">
                         <div class="panel-comment-img">
                             <img src="img/avt-user/user-ten.jpg" alt="">
                         </div>
                         <div class="panel-comment-comment">
                             <div class="panel-comment-comment-name">Joe-katahat</div>
                             <div class="panel-comment-comment-content">Tôi rất muốn đến đây một lần, thật đẹp quá đi </div>

                             
                         </div>
                         <i class="fas fa-heart note8" onclick="tymfun(this) "></i>
                         
                     </div>
                       <div class="panel-request">
                           <div class="panel-request-avatar">
                               <img src="img/avt-user/user-ten.jpg" alt="">
                           </div>
                           <div class="panel-request-input">
                               <input type="text" placeholder="Viết Bình luận ... ">
                           </div>
                       </div>

                    </div></div>
                    <i class="fas fa-share" onclick="sharefun(this)"><span>&emsp;Share</span> </i>

                </div>
            </div>
        </div>


        </div>
    </div>
    <div class="main-mid-right">
        <div class="main-mid-right-friend">
        <div class="main-mid-right-friend-text">
            
                  <h2>Lời mời kết bạn</h2>
                  <a href="# ">Xem tất cả</a>
                  </div>
                  
                <div class="main-mid-right-friend-user">
                  <div class="header-right-list-item-dropdown4-content-item">
                    <div class="header-right-list-item-dropdown4-content-item-img">
                        <img src="img/avt-user/user-two.jpg" alt="">
                    </div>
                    <div class="header-right-list-item-dropdown4-content-item-content">
                        <div class="header-right-list-item-dropdown4-content-item-content-name">Phạm Ly</div>
                        <div class="header-right-list-item-dropdown4-content-item-content-button">
                            <button class="yes-button" onclick="likeFun(this)">Xác Nhận</button>
                            <button class="No-button" onclick="dontlike(this)">Xóa</button>
                        </div>
                    </div>
                </div>
     </div>
        </div>
       <div class=" main-left-list-support-line"></div>
              <div class="main-mid-right-Time-item-birthday">
                  <div class="main-mid-right-Time-item-birthday-text">Sinh nhật</div>
                      <div class="main-mid-right-Time-item-birthday-user">
                        <i class="bi bi-gift-fill">Hôm nay là sinh nhật của <span>Hong Ngan và những người khác </span></i>
                      </div>
              </div>

             <div class=" main-left-list-support-line"></div>
       
        <div class="main-mid-right-Time">
            <div class="main-mid-right-advertisement-header">
                <div class="main-mid-right-advertisement-header-item1">Quảng cáo</div>
                <div class="main-mid-right-advertisement-header-item2">Close</div>
            </div>
            <div class="main-mid-right-advertisement-header-mid">
                <img src="img/avt-user/quangcao.jpg" alt="">
                <a href="#">MESGA SALE</a>

            </div>
        </div>
        <div class="main-mid-right-item">
            <div class="main-mid-right-item-header">
                <div class="main-mid-right-item-header-title">Người liên hệ </div>
                <div class="main-mid-right-item-header-title2"><i class="bi bi-three-dots"></i>t</div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-15.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                    Vũ
                    </div>
                </div>
                <div class="poiner-online">

                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-15.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                    Nguyễn Quốc Tuấn
                    </div>
                </div>
                <div class="poiner-online">

                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-three.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                    Nguyễn Thùy Ninh
                    </div>
                </div>
                <div class="poiner-online">

                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-one.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                        Mạnh Nguyễn
                    </div>
                </div>
                <div class="poiner-online">
                    
                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-two.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                       Phạm Ly
                    </div>
                </div>
                <div class="poiner-online">
                    
                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-four.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                       Nguyễn Hải Quân
                    </div>
                </div>
                <div class="poiner-online">
                    
                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-ten.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                       Phan Nguyễn Hải nam
                    </div>
                </div>
                <div class="poiner-online">
                    
                </div>
            </div>
            <div class="main-mid-right-item-content">
                <div class="main-mid-right-item-content-item">
                    <div class="main-mid-right-item-content-item-img">
                        <img src="img/avt-user/user-ten.jpg" alt="">
                    </div>
                    <div class="main-mid-right-item-content-item-name">
                       Phan Nguyễn Hải nam
                    </div>
                </div>
                <div class="poiner-online">
                    
                </div>
            </div>
        </div>
    </div>
    </div>

 <script  src="./js/dropdow1.js"></script>
 <script src="./js/dropdow2.js"></script>
 <script src="./js/dropdown3.js"></script>
 <script src="./js/dropdown4.js"></script>
 <script src="./js/likeFun.js"></script>
 <script src="./js/move.js"></script>
 <script src="./js/onclick.js"></script>
 <script src="./js/panel.js"></script>
</body>
</html>