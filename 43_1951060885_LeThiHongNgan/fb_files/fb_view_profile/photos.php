<?php
	session_start();
	if(isset($_SESSION['fbuser']))
	{
		$v_user_id=$_GET['id'];
		include("background.php");
?>
<html>
<head>
<title><?php echo $name; ?></title>
</head>
<body bgcolor="#E9EAED">



<div style="position:absolute;left:17.2%; top:6.5%; font-weight:bold; z-index:1;color: #b0b3b8;"> <a href="view_profile.php?id=<?php echo $v_user_id; ?>" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_timeline_txt();" onMouseOver="on_timeline_txt();" onMouseOut="out_timeline_txt();"> Bài viết </a> </div>

<div style="position:absolute;left:23%; top:6.5%; font-weight:bold; z-index:1;"> <a href="about.php?id=<?php echo $v_user_id; ?>" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_about_txt();" onMouseOut="out_about_txt();"> About </a>  </div>
<div style="position:absolute;left:34%; top:6.5%; font-weight:bold; z-index:1; color:#b0b3b8;"> Photos  <samp style="color:#717171;"> <?php echo $photos_count; ?> </samp> </div>
<div style="position:absolute;left:40%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Xem thêm </a>  </div>
<div style="position:absolute;left:53%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Thêm Vào tin </a>  </div>
<div style="position:absolute;left:61%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Chỉnh sửa trang cá nhân  </a>  </div>
<div style="position:absolute;left:75%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> <i class="bi bi-list"></i> </a>  </div>





<div style="position:absolute;left:15%;top:7.3%;height:12%;width:70%; background-color:#F6F7F8; box-shadow:0px -1px 5px 1px rgb(0,0,0);"> </div>

<div style="position:absolute;left:16%;top:7.5%;"> <img src="img/photos.PNG"> </div>
<div style="position:absolute;left:19%;top:66.3%;"> <h2> Photos </h2> </div>

<div style="position:absolute;left:15%; top:7.7%; height:125%; width:70%; background:#FFF; box-shadow:0px -1px 5px 1px rgb(0,0,0); z-index:-1;">
</div>

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
<div style="position:absolute; left:18%; top:8.5%;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Profile/<?php echo $profile_img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_profile_photo_album()">
</div>
<div style="position:absolute; left:23%; top:8%;"> <h3> Anh đại  </h3> </div>

<div style="position:absolute; left:41%; top:8.5%;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Cover/<?php echo $cover_img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" id="cover_photo" onClick="open_cover_photo_album()" >
</div>
<div style="position:absolute; left:46.4%; top:8%;"> <h3> Ảnh bìa </h3> </div>

<?php
	$img_array = array();
	while($post_img_data=mysqli_fetch_array($que_post_img))
	{
		array_push($img_array,$post_img_data[3]);
	}
?>

<div style="position:absolute; left:65%; top:8.5%;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Post/<?php echo $img_array[0] ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" id="timeline_photos" onClick="open_timeline_photos_album()">
</div>
<div style="position:absolute; left:70%; top:8%;"> <h3> Anh tải lên  </h3> </div>
</div>

<!--profile_photo_album-->
<div style="display:none;" id="profile_photo_album">
<div style="position:absolute; left:21%; top:8%;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Profile/<?php echo $profile_img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_profile_photo()">
</div>
<div style="position:absolute; left:18%; top:8%;"> <img src="img/Go back.png" height="50" width="50" onClick="back()"> </div>
</div>

<!--cover_photo_album-->
<div style="display:none;" id="cover_photo_album">
<div style="position:absolute; left:21%; top:8%;">
<img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Cover/<?php echo $cover_img; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_cover_photo()">
</div>
<div style="position:absolute; left:18%; top:8%;"> <img src="img/Go back.png" height="50" width="50" onClick="back()"> </div>
</div>

<!--timeline_photos_album bg-->
<div style="display:none;" id="timeline_photos_album">
<div style="position:absolute;left:15%; top:8%; height:1<?php echo $photos_count-2; ?>0%; width:70%; background:#FFF; box-shadow:0px -1px 5px 1px rgb(0,0,0); z-index:-1;">
</div>


<script>
function timeline_photos_open(photo_id,vid)
{
	var xmlhttp;

  	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{	
  			var details=document.getElementById("photos_ID");
	  		details.innerHTML=xmlhttp.responseText;
	}
	xmlhttp.open("GET","open_timeline_photos_album.php?photo="+photo_id+"&v_id="+vid,true);
	xmlhttp.send(null);
}

function close_timeline_album_photo()
{
	document.getElementById("timeline_album_photo").style.display='none';
}
</script>

<div style="position:absolute; left:18%; top:8%;">
<img src="img/Go back.png" height="50" width="50" onClick="back()">
<table cellpadding="41">
<tr>
<?php
	$tr=0;
	$que_post_img=mysqli_query($conn,"select * from user_post where user_id=$v_user_id and post_pic!=''and priority='Public' order by post_id desc");
	
	while($post_img_data=mysqli_fetch_array($que_post_img))
	{
		$tr=$tr+1;
?>
		<td><img src="../../fb_users/<?php echo $v_gender; ?>/<?php echo $v_email; ?>/Post/<?php echo $post_img_data[3]; ?>" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="timeline_photos_open(<?php echo $post_img_data[0]; ?>,<?php echo $v_user_id; ?>)">
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



<div style="position:absolute;left:24%;top:9%; color:#E9EAED;">.</div>



</body>
</html>
<?php
	}
	else
	{
		header("location:../../index.php");
	}
?>
