<?php
		$user=$_SESSION['fbuser'];
		$conn=mysqli_connect("localhost","root","","1951060885_facebook");
		
		$query1=mysqli_query($conn,"select * from users where Email='$user'");
		$rec1=mysqli_fetch_array($query1);
		$userid=$rec1[0];
		$query2=mysqli_query($conn,"select * from user_profile_pic where user_id=$userid");
		$rec2=mysqli_fetch_array($query2);
		
		$name=$rec1[1];
		$gender=$rec1[4];
		$img=$rec2[2];
?>
<?php 
	$que_v_user_info=mysqli_query($conn,"select * from users where user_id=$v_user_id");
	$v_user_data=mysqli_fetch_array($que_v_user_info);
	$v_name=$v_user_data[1];
	$v_gender=$v_user_data[4];
	$v_email=$v_user_data[2];
	$v_bday=$v_user_data[5];
	
	$que_view_user_profile_pic=mysqli_query($conn,"select * from user_profile_pic where user_id=$v_user_id");
	$user_profile_pic_data=mysqli_fetch_array($que_view_user_profile_pic);
	$profile_img=$user_profile_pic_data[2];


	$que_user_cover_pic=mysqli_query($conn,"select * from user_cover_pic where user_id=$v_user_id");
	$user_cover_pic_data=mysqli_fetch_array($que_user_cover_pic);
	$cover_img=$user_cover_pic_data[2];
	

	$que_post_img=mysqli_query($conn,"select * from user_post where user_id=$v_user_id and post_pic!='' and priority='Public' order by post_id desc");
	$photos_count=mysqli_num_rows($que_post_img);
	$photos_count=$photos_count+2;

?>
<html>
<head>
<title> <?php echo $v_name; ?> </title>
<link rel="stylesheet" type="text/css" href="assets/main-stylepro.css">
<link rel="stylesheet" type="text/css" href="assets/stylepro.css">  
    <link href="../fb_font/font.css" rel="stylesheet" type="text/css">
	<script src="background_file/background_js/event.js"></script>
	<script src="background_file/background_js/searching.js"></script>
	<script src="background_file/background_js/searched_reco_event.js"></script>
<script src="background_file/background_js/profile_pic&cover_pic.js"></script>
	<link href="background_file/background_css/profile.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="icon/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="../fb_font/font.css" rel="stylesheet" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="../fb_title_icon/Faceback.ico" />
</head>
<body id="body">

<!--Head background-->
<div style="width: 100%;
    height: 75px;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #333;
    position: absolute;
    position: fixed;
    background-color: #1c1e21;
    z-index: 2;" class="header">
        <div class="header-left" style="  width: 328px;
    margin-top: auto;
    margin-bottom: auto;
    display: flex;
    justify-content: center; 
    margin-left: 20px;   ">
            <div class="header-left-icon">
<!--Head fb text-->
<a href="../fb_home/Home.php" style="color:#FFFFFF; text-decoration:none;" onMouseOver="on_head_fb_text()" onMouseOut="out_head_fb_text()"> <img style="height: 50px;width: 55px;margin-top: 10px;
 margin-right: 10px;"  src="img/logo-facebook.png"> </a> </div>

<!--Head fb text background-->

<script>
	function bcheck()
	{
		s=document.fb_search.search1.value;
		
		if(s=="")
		{
			return false;
		}
		return true;
	}
</script>
<form name="fb_search" action="Search_Display_submit.php" method="get" onSubmit="return bcheck()">
	<div class="header-left-search"> 
		<input style="width:100% ;
    background: rgba(255,255,255,0.2);
    border:none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    color:#fff;
    letter-spacing: 1px;
    height: 50px;
    width: 300px;
    margin-top: 10px;
    margin-left: 10px" class="search" type="text" name="search1"   onKeyUp="searching();" id="search_text1" placeholder="Search for people" > </div>
	
	<div id="searching_ID"></div> 

	<div style="position:fixed; left:22.1%;top:2.6%; z-index:1;">
	<a style="background-color;" href=""><i class="bi bi-search"></i></a>
	</div>
</form>
</div>

<div class="header-mid">
<ul class="header-mid-list" style="display: flex;
    justify-content: space-between;
    list-style: none;
    margin-top: 20px;">
                <li class="header-mid-list-item has-index" onMouseOver="head_home_over()" onMouseOut="head_home_out()">
                    
                   <a href="../fb_home/Home.php" id="head_home_font" class="has-hover-icon"> <i class="bi bi-house-door-fill has-index-icon"></i></a>
                   <div class="header-right-list-item-number note5">9+</div>
                   <div class="header-mid-list-item-dropdown">
                  
                       Trang chủ
                   </div>
                </li>
                <li class="header-mid-list-item ">
                    <a href="" class="has-hover-icon"> <i class="bi bi-file-earmark-break-fill"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                        Trang
                    </div>
                </li>
                <li class="header-mid-list-item">
                    <a href="" class="has-hover-icon"><i class="bi bi-youtube"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                        Video
                    </div>
                </li>
                <li class="header-mid-list-item">
                    <a href="" class="has-hover-icon"> <i class="bi bi-bag-fill"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                       Shop
                    </div>
                </li>
                <li class="header-mid-list-item">
                    <a href="" class="has-hover-icon"><i class="bi bi-collection-fill"></i></a>
                    <div class="header-right-list-item-number note5">9+</div>
                    <div class="header-mid-list-item-dropdown">
                       Group
                    </div>
                </li>
            </ul>
        </div>
	
<div class="header-right" style="width:300px">
<ul class="header-right-list">
    <li class="header-right-list-item"><div  id="head_img" onMouseOver="head_pro_pic_over()" onMouseOut="head_pro_pic_out()"> <a style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none;" href="../fb_profile/Profile.php">  <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:27; width:25;"> &nbsp;  <?php echo $name; ?> &nbsp;</a></div>

		</li>
	<li class="header-right-list-item ">
                   <a > <i class="bi bi-person-lines-fill"></i></a>
                   <div class="header-right-list-item-hover-dropdown">List friend</div>
                   <div class="header-right-list-item-dropdown4 ">
                       <div class="header-right-list-item-dropdown4-content">
                           <div class="header-right-list-item-dropdown4-content-title">New Friend</div>
                            
                            
                  </div>
                   </div>
                </li>
		
		
		<li class="header-right-list-item dropbtn">
                    <a href="../fb_home/Group_Message.php"><i class="bi bi-messenger"></i></a>
                    <div class="header-right-list-item-number">7</div>

                       <div class="header-right-list-item-hover-dropdown">Messenger</div>
                    <div class="header-right-list-item-dropdown ">
                        <div class="header-right-list-item-dropdown4-content">
                            <div class="header-right-list-item-dropdown-content-title">Messenger</div>
                            
              
                           
                        </div>
                        
                    </div>
                    
                </li>
                <li class="header-right-list-item nut_dropdown ">
                    <a ><i class="bi bi-bell-fill"></i></a>
                    <div class="header-right-list-item-number note4">10</div>
                    
                    <div class="header-right-list-item-hover-dropdown">Thông Báo</div>
                    <div class="header-right-list-item-dropdown2 noidung_dropdown" >
                      <div class="header-right-list-item-dropdown2-content">
                          <div class="header-right-list-item-dropdown2-content-title">Thông Báo</div>
                       
                  
                      </div>
                    </div>
                    

                </li>

      </ul>





<!--fb option-->
<script src="background_file/background_js/options.js"></script>

        <div style="position:fixed; left:97%; top:0.4%; z-index:1;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="open_option()"> </div>
        
<div style="display:none" id="option">

<div style="position:fixed; left:97%; top:1%; z-index:1;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="close_option()"> </div>

        <div style="position:fixed; left:85%; top:6%; z-index:3; background:#FFF; height:32%; width:14.8%; box-shadow:0px 2px 10px 1px rgb(0,0,0);"> </div>
        
         <div style="position:fixed; left:86%; top:8.5%; z-index:3;">
        <a href="../fb_profile/Profile.php"> <img src="img/timeline.png" width="16" height="16" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()"></a>
        </div>
        <div style="position:fixed; left:88%; top:7%; z-index:3;">
                 <a href="../fb_profile/Profile.php" style="text-decoration:none; color:#000;" id="head_timeline" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()" ><h4>Profie-User</h4></a> 
        </div>
        <div style="position:fixed; left:86%; top:13.5%; z-index:3;">
             <a href="../fb_profile/about.php"> <img src="img/about.png" onMouseOver="head_about_over()" onMouseOut="head_about_out()"> </a>
        </div> 
        <div style="position:fixed; left:88%; top:13%; z-index:3;">
                <a href="../fb_profile/about.php" style="text-decoration:none; color:#000;" id="head_about" onMouseOver="head_about_over()" onMouseOut="head_about_out()"><h4>Gioi Thieu</h4></a> 
        </div>
        
        <div style="position:fixed; left:85.8%; top:18%; z-index:3;"> <a href="../fb_profile/photos.php"> <img src="img/photo&video.PNG" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:17%; z-index:3;"><a href="../fb_profile/photos.php" style="text-decoration:none; color:#000;" id="head_photos" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"><h4>Photos</h4></a></div>

	<div style="position:fixed; left:85.8%; top:23%; z-index:3;"> <a href="Settings.php"> <img src="img/settings2.png" height="25" width="23" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:22%; z-index:3;"><a href="Settings.php" style="text-decoration:none; color:#000;" id="head_settings" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"><h4> Account Settings </h4></a></div>




<div style="position:fixed; left:86%; top:27.5%; z-index:3;"> <a href="../fb_logout/logout.php"> <img src="background_file/background_icons/logout.png" height="20" width="20"  onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:27.1%; z-index:3;"><a href="../fb_logout/logout.php" style="text-decoration:none; color:#000;" id="head_logout" onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"><h4> Logout </h4></a></div>
</div>
</div>
</div>

		

<!--cover img-->
<div style="position:absolute; left:15%; top:1%;"> <img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Cover/<?php echo $cover_img; ?>" height="430" width="1190" onMouseOver="dis_cover_pic_edit();" onMouseOut="out_cover_pic_edit();" onClick="open_cover_photo()"> </div>

<!--cover pic open dailog box-->
<div style="display:none;" id="cover_pic_open_box">
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3" onClick="close_cover_photo()"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>
<div style="position:fixed; left:20%; top:10%;z-index:4;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Cover/<?php echo $cover_img; ?>" style="height:500; width:800; ">
</div>
</div>

<!--Profile pic ,name-->
<div style="position:absolute; left:43%; top:3.8%; z-index:1;">

	<tr>
		<td>  <img style="border-radius: 50%; width: 32%;height: 30%"  src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Profile/<?php echo $profile_img; ?>" style="height:150; width:150;" onClick="open_profile_photo()">  </td>
	</tr>
</div>
<div style="position:absolute; left:45%; top:6.7%; z-index:1;">
		<td>  &nbsp; &nbsp; <samp onMouseOver="left_name_over()" onMouseOut="left_name_out()" style="color:#FFFFFF; font-size:23; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none; background-color:#000000;" id="left_name">   <?php echo $v_name; ?>  </samp> </td>
	</div>





<!--profile pic open dailog box-->
<div style="display:none;" id="profile_pic_open_box">
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3" onClick="close_profile_photo()"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>
<div style="position:fixed; left:20%; top:10%;z-index:4;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Profile/<?php echo $profile_img; ?>" style="height:500; width:800; ">
</div>
</div>



<script> 
	function on_timeline_txt()
	{
		document.getElementById("timeline_txt_background").style.display='block';
	}
	function out_timeline_txt()
	{
		document.getElementById("timeline_txt_background").style.display='none';
	}
	function on_about_txt()
	{
		document.getElementById("about_txt_background").style.display='block';
	}
	function out_about_txt()
	{
		document.getElementById("about_txt_background").style.display='none';
	}
	function on_photos_txt()
	{
		document.getElementById("photos_txt_background").style.display='block';
	}
	function out_photos_txt()
	{
		document.getElementById("photos_txt_background").style.display='none';
	}
</script>



<!--Online-->
<script>
		function up_online()
		{
		 	document.getElementById("online_bg").style.display='block';
			document.getElementById("down_onlne").style.display='block';
			document.getElementById("down_onlne_img").style.display='block';
			document.getElementById("up_online").style.display='none';
			document.getElementById("up_online_img").style.display='none';
		}
		function down_online()
		{
		 	document.getElementById("online_bg").style.display='none';
			document.getElementById("down_onlne").style.display='none';
			document.getElementById("down_onlne_img").style.display='none';
			document.getElementById("up_online").style.display='block';
			document.getElementById("up_online_img").style.display='block';
		}
</script>
<div style="display:none;" id="online_bg">
<div style="position:fixed; left:84%; top:6%; background-color:#7F7F7F;  height:89.2%; width:16%; z-index:2;"></div>

<?php
	 $query_online=mysqli_query($conn,"select * from user_status where status='Online'");
	 $online_count=mysqli_num_rows($query_online);
	  $online_count=$online_count-1;
	  if($online_count==0)
	 {
?>

	<div style="position:fixed; left:89%; top:8%; color:#FFF; z-index:2;"> Not found </div>
<?php
	 }
?>
	<div style="position:fixed; left:84.5%; top:6%; z-index:2;">
	<table>
<?php
	 while($online_data=mysqli_fetch_array($query_online))
	 {
	  	$online_user_id=$online_data[0];
		$query_online_user_data=mysqli_query($conn,"select * from users where user_id=$online_user_id");
		$query_online_user_pic=mysqli_query($conn,"select * from user_profile_pic where user_id=$online_user_id");
		$fetch_online_user_info=mysqli_fetch_array($query_online_user_data);
		$fetch_online_user_pic=mysqli_fetch_array($query_online_user_pic);
		$online_user_name=$fetch_online_user_info[1];
		$online_user_Email=$fetch_online_user_info[2];
		$online_user_gender=$fetch_online_user_info[4];
		$online_user_pic=$fetch_online_user_pic[2];
			
			if($user!=$online_user_Email)
            {
?>
			 <tr>
			   	   <td> <a href="view_profile.php?id=<?php echo $online_user_id; ?>"> <img src="../../fb_users/<?php echo $online_user_gender; ?>/<?php echo $online_user_Email; ?>/Profile/<?php echo $online_user_pic; ?>" height="30" width="30"> </a> </td>
				   <td style="color:#ffffff;"> <a href="view_profile.php?id=<?php echo $online_user_id; ?>" style="text-transform:capitalize; text-decoration:none; color:#ffffff;"> <?php echo $online_user_name; ?> </a> &nbsp; </td>	
				   <td><img src="background_file/background_icons/online_symbol.png"  /></td>   
			 </tr>	
<?php	
			}
	 }
?>
</table>
</div>
</div>



<div style="position:fixed; left:84%; top:95.2%;z-index:2;" id="up_online"> <input type="button" style="height:30; width:216; border:groove;" value="Online(<?php echo $online_count; ?>)" onClick="up_online()"/>  </div>
<div style="position:fixed; left:84%; top:95.2%; display:none;z-index:2;" id="down_onlne"> <input type="button" style=" height:30; width:216; border:groove;" value="Online(<?php echo $online_count; ?>)" onClick="down_online()" />  </div>
<div style="position:fixed; left:88%; top:95.7%;z-index:2;" id="up_online_img"> <img src="background_file/background_icons/online.png" onClick="up_online()" /></div>
<div style="position:fixed; left:88%; top:95.7%;z-index:2; display:none;"id="down_onlne_img"> <img src="background_file/background_icons/online.png" onClick="down_online()" /></div>

</body>
</html>