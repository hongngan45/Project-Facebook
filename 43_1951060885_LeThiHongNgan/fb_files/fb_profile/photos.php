<?php
	session_start();
	if(isset($_SESSION['fbuser']))
	{
		include("background.php");
?>
<html>
<head>
<title><?php echo $name; ?></title>
</head>
<body bgcolor="#E9EAED">

<?php
	$que_post_img=mysqli_query($conn,"select * from user_post where user_id=$userid and post_pic!='' order by post_id desc");
	$photos_count=mysqli_num_rows($que_post_img);
	$photos_count=$photos_count+$count1+1;
?>




<div style="position:absolute;left:17.2%; top:6.5%; font-weight:bold; z-index:1;color: #b0b3b8;"> <a href="Profile.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_timeline_txt();" onMouseOut="out_timeline_txt();">  Bai Viet  </a> </div>

<div style="position:absolute;left:23%; top:6.5%; font-weight:bold; z-index:1;"> <a href="about.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_about_txt();" onMouseOut="out_about_txt();"> Gioi Thiệu </a>  </div>


<div style="position:absolute;left:29%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8; "> Bạn bè </a>  </div>


<div style="position:absolute;left:34%; top:6.5%; font-weight:bold; z-index:1; color:#b0b3b8;"> <a href="photos.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_photos_txt();" onMouseOut="out_photos_txt();">  Photos </a> <samp style="color:#717171;"> <?php echo $photos_count; ?> </samp> </div>


<div style="position:absolute;left:40%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Xem thêm </a>  </div>
<div style="position:absolute;left:53%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Thêm Vào tin </a>  </div>
<div style="position:absolute;left:61%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Chỉnh sửa trang cá nhân  </a>  </div>
<div style="position:absolute;left:75%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> <i class="bi bi-list"></i> </a>  </div>


<script>
function open_profile_photo_album()
{
	document.getElementById("profile_photo_album").style.display='block';
	document.getElementById("albums").style.display='none';
}
function open_cover_photo_album()
{
	document.getElementById("cover_photo_album").style.display='block';
	document.getElementById("albums").style.display='none';
}
function open_timeline_photos_album()
{
	document.getElementById("timeline_photos_album").style.display='block';
	document.getElementById("albums").style.display='none';
}
function back()
{
	document.getElementById("profile_photo_album").style.display='none';
	document.getElementById("cover_photo_album").style.display='none';
	document.getElementById("timeline_photos_album").style.display='none';
	document.getElementById("albums").style.display='block';
}
function open_profile_photo()
{
	document.getElementById("profile_pic_open_box").style.display='block';
}
function close_profile_photo()
{
	document.getElementById("profile_pic_open_box").style.display='none';
}


</script>

<div id="albums">
<div style="position:absolute; left:18%; top:7.3%;">
<img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_profile_photo_album()">
</div>
<div style="position:absolute; left:23%; top:7%;color: #006400;"> <h3> Ảnh đại diện </h3> </div>

<div style="position:absolute; left:40%; top:7.3%;">
<img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Cover/<?php echo $cover_img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" id="cover_photo" onClick="open_cover_photo_album()" >
</div>
<div style="position:absolute; left:45.4%; top:7%;color: #006400;"> <h3> Ảnh bìa</h3> </div>

<?php
	$img_array = array();
	while($post_img_data=mysqli_fetch_array($que_post_img))
	{
		array_push($img_array,$post_img_data[3]);
	}
?>

<div style="position:absolute; left:65%; top:7.3%;">
<img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[0] ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" id="timeline_photos" onClick="open_timeline_photos_album()">
</div>
<div style="position:absolute; left:70%; top:7%;color: #006400;"> <h3> Ảnh tải lên </h3> </div>
</div>

<!--profile_photo_album-->
<div style="display:none;" id="profile_photo_album">
<div style="position:absolute; left:21%; top:7.4%;">
<img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_profile_photo()">
</div>
<div style="position:absolute; left:18%; top:7.7%;"> <img src="img/Go back.png" height="50" width="50" onClick="back()"> </div>
</div>

<!--cover_photo_album-->
<div style="display:none;" id="cover_photo_album">
<div style="position:absolute; left:21%; top:7.9%;">
<img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Cover/<?php echo $cover_img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_cover_photo()">
</div>
<div style="position:absolute; left:18%; top:8.2%;"> <img src="img/Go back.png" height="50" width="50" onClick="back()"> </div>
</div>

<!--timeline_photos_album-->
<div style="display:none;" id="timeline_photos_album">
<div style="position:absolute;left:15%; top:8.5%; height:1<?php echo $photos_count-2; ?>0%; width:70%; background:#FFF; box-shadow:0px -1px 5px 1px rgb(0,0,0); z-index:-1;">
</div>


<script>
function timeline_photos_open(photo_id)
{
	var xmlhttp;

  	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{	
  			var details=document.getElementById("photos_ID");
	  		details.innerHTML=xmlhttp.responseText;
	}
	xmlhttp.open("GET","open_timeline_photos_album.php?photo="+photo_id,true);
	xmlhttp.send(null);
}

function close_timeline_album_photo()
{
	document.getElementById("timeline_album_photo").style.display='none';
}
</script>

<div style="position:absolute; left:18%; top:8.5%;">
<img src="img/Go back.png" height="50" width="50" onClick="back()">
<table cellpadding="41">
<tr>
<?php
	$tr=0;
	$que_post_img=mysqli_query($conn,"select * from user_post where user_id=$userid and post_pic!='' order by post_id desc");
	
	while($post_img_data=mysqli_fetch_array($que_post_img))
	{
		$tr=$tr+1;
?>
		<td><img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $post_img_data[3]; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="timeline_photos_open(<?php echo $post_img_data[0]; ?>)">
        </td>
<?php
		if($tr>=3)
		{
			echo "</tr>";
			$tr=0;
		}
	}
?>
</tr>
</table>
</div>

</div>

<div id="photos_ID"> </div>



<div style="position:absolute;left:24%;top:220%; color:#E9EAED;">.</div>



</body>
</html>
<?php
	}
	else
	{
		header("location:../../index.php");
	}
?>