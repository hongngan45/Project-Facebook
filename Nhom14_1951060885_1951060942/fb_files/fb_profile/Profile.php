<?php
	session_start();
	if(isset($_SESSION['fbuser']))
	{
		include("background.php");
?>
<?php
	if(isset($_POST['txt']))
	{
		$txt=$_POST['post_txt'];
		$priority=$_POST['priority'];
		$post_time=$_POST['txt_post_time'];
		mysqli_query($conn,"insert into user_post(user_id,post_txt,post_time,priority) values('$userid','$txt','$post_time','$priority');");
	}
	
	if(isset($_POST['file']) && ($_POST['file']=='post'))
	{
		$txt=$_POST['post_txt'];
		$priority=$_POST['priority'];
		$post_time=$_POST['pic_post_time'];
		if($txt=="")
		{
			$txt="added a new photo.";
		}
		if($gender=="Male")
		{
			$path = "../../fb_users/Male/".$user."/Post/";
		}
		else
		{
			$path = "../../fb_users/Female/".$user."/Post/";
		}
		
		$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$img_name;
		if($gender=="Male")
		{
			move_uploaded_file($img_tmp_name,"../../fb_users/Male/".$user."/Post/".$prod_img_path);
		}
		else
		{
			move_uploaded_file($img_tmp_name,"../../fb_users/Female/".$user."/Post/".$prod_img_path);
		}
    	mysqli_query($conn,"insert into user_post(user_id,post_txt,post_pic,post_time,priority) values('$userid','$txt','$img_name','$post_time','$priority');");
	}
	if(isset($_POST['delete_post']))
	{
		$post_id=intval($_POST['post_id']);
		mysqli_query($conn,"delete from user_post where post_id=$post_id;");
	}
	if(isset($_POST['Like']))
	{
		$post_id=intval($_POST['postid']);
		$user_id=intval($_POST['userid']);
		mysqli_query($conn,"insert into user_post_status(post_id,user_id,status) values($post_id,$user_id,'Like');");
	}
	if(isset($_POST['Unlike']))
	{
		$post_id=intval($_POST['postid']);
		$user_id=intval($_POST['userid']);
		mysqli_query($conn,"delete from user_post_status where post_id=$post_id and  	user_id=$user_id;");
	}
	if(isset($_POST['comment']))
	{
		$post_id=intval($_POST['postid']);
		$user_id=intval($_POST['userid']);
		$txt=$_POST['comment_txt'];
		if($txt!="")
		{
		mysqli_query($conn,"insert into user_post_comment(post_id,user_id,comment) values($post_id,$user_id,'$txt');");
		}
	}
	if(isset($_POST['delete_comment']))
	{
		$comm_id=intval($_POST['comm_id']);
		mysqli_query($conn,"delete from user_post_comment where comment_id=$comm_id;");
	}
?>
<html>
<head>
<title><?php echo $name; ?></title>
<link href="Profile_css/Profile.css" rel="stylesheet" type="text/css">
<script src="Profile_js/Profile.js"> </script>
<script>
	function time_get()
	{
			d = new Date();
			mon = d.getMonth()+1;
			time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
			posting_txt.txt_post_time.value=time;
	}
	function time_get1()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		posting_pic1.pic_post_time.value=time;
	}
</script>
</head>
<body style="background-color:black;">

<?php
	$que_post_img=mysqli_query($conn,"select * from user_post where user_id=$userid and post_pic!='' order by post_id desc");
	$photos_count=mysqli_num_rows($que_post_img);
	$photos_count=$photos_count+$count1+1;
?>

<div style="position:absolute;left:17.2%; top:6.5%; font-weight:bold; z-index:1;color: #b0b3b8;">  Bài viết  </div>

<div style="position:absolute;left:23%; top:6.5%; font-weight:bold; z-index:1;"> <a href="about.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_about_txt();" onMouseOut="out_about_txt();"> Gioi Thiệu </a>  </div>

<div style="position:absolute;left:29%; top:6.5%; font-weight:bold; z-index:1;"> <a style="text-decoration:none; color:#b0b3b8; "> Bạn bè </a>  </div>


<div style="position:absolute;left:34%; top:6.5%; font-weight:bold; z-index:1; color:#b0b3b8;"> <a href="photos.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_photos_txt();" onMouseOut="out_photos_txt();">  Photos </a> <samp style="color:#717171;"> <?php echo $photos_count; ?> </samp> </div>

<div style="position:absolute;left:40%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Xem thêm </a>  </div>
<div style="position:absolute;left:53%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Thêm Vào tin </a>  </div>
<div style="position:absolute;left:61%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Chỉnh sửa trang cá nhân  </a>  </div>
<div style="position:absolute;left:75%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> <i class="bi bi-list"></i> </a>  </div>


<!--Status-->
<div style=" ;background:#18191a; position:absolute; left:34.7%; top:7.2%; height:50%; width:50%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);"> </div>
<div style="position:absolute; left:38.2%; top:7.4%;"> <img src="img/Status.PNG"><input type="button" onClick="upload_close();"  value="Update Status" style="background:#b0b3b8;"> <img src="img/photo&video.PNG"><input type="button"  value="Add Photos" onClick="upload_open();" name="file" style="background:#b0b3b8;"></div>


<form method="post" name="posting_txt" onSubmit="return blank_post_check();" id="post_txt">
	
	<div style="position:absolute; left:38.2%; top:7.7%;">
		<textarea style="background-color: #b0b3b8;height:100; width:730;" name="post_txt" maxlength="511" placeholder="What's on your mind?"></textarea>
	</div>	
    <input  type="hidden" name="txt_post_time">
	<div style="background-color: white;position:absolute; left:70%; top:8.74%;">
	<select  style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
	</select>
	</div>
	<div style="position:absolute; left:77.3%; top:8.75%;"> <input type="submit" value="post" name="txt" id="post_button" onClick="time_get()"> </div>
	</form>
	
	
	<form method="post" enctype="multipart/form-data" name="posting_pic1" style="display:none;" id="post_pic" onSubmit="return post_Img_check();">
	
	<div style="position:absolute; left:38.2%; top:7.7%;">
		<textarea style="height:100; width:730;" name="post_txt" maxlength="511" placeholder="What's on your mind?" id="pic_post_txt1" ></textarea>
	</div>
    <input type="hidden" name="pic_post_time"> 
	<div style="position:absolute; left:38%; top:8.75%;"> <input style="color:white" type="file" name="file" id="post_img"> </div>
	<div style="background-color: white;position:absolute; left:70%; top:8.74%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
	</select>
	</div>
	<div style="position:absolute; left:77.3%; top:8.75%;"> <input type="submit" value="post" name="file" id="post_button" onClick="time_get1()"> </div>
	</form>


<?php
	$que_post_bg1=mysqli_query($conn,"select * from user_post where user_id=$userid");
	$count_bg1=mysqli_num_rows($que_post_bg1);
?>


	<!-- post bg-->
	<div style="position:absolute; left:38.2%; top:9.2%; background:#b0b3b8; height:<?php echo $count_bg1+3; ?>60%; width:41.4%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);" > </div>
	


<div style="position:absolute;left:38.2%; top:9.2%;width:41.4%">
<table cellspacing="0">
<?php
	$que_post=mysqli_query($conn,"select * from user_post where user_id=$userid order by post_id desc");
	while($post_data=mysqli_fetch_array($que_post))
	{
		$postid=$post_data[0];
		$post_user_id=$post_data[1];
		$post_txt=$post_data[2];
		$post_img=$post_data[3];
		$que_user_info=mysqli_query($conn,"select * from users where user_id=$post_user_id");
		$que_user_pic=mysqli_query($conn,"select * from user_profile_pic where user_id=$post_user_id");
		$fetch_user_info=mysqli_fetch_array($que_user_info);
		$fetch_user_pic=mysqli_fetch_array($que_user_pic);
		$user_name=$fetch_user_info[1];
		$user_Email=$fetch_user_info[2];
		$user_gender=$fetch_user_info[4];
		$user_pic=$fetch_user_pic[2];
?>
	<tr>
			<?php
			if($post_txt=="Join Faceback")
			{?>
				<td colspan="5"align="right" style="border-top:outset; border-top-width:thin;">&nbsp;  </td>
			<td>  </td>
			<td> </td>
			<?php
			}
			else
			{
			?>
			<td colspan="5" align="right" style="border-top:outset; border-top-width:thin;"> 
			<form method="post">  
				<input type="hidden" name="post_id" value="<?php echo $postid; ?>" >
				<input type="submit" name="delete_post" value=" " style="background-color:#FFFFFF; border:#FFFFFF; background-image:url(img/delete_post.gif); width:2.4%;"> 
			</form> </td>
			<td>  </td>
			<td> </td>
			<?php } ?>
		</tr>
		<tr>
		<td width="5%" style="padding-left:10;" rowspan="2"> <img src="../../fb_users/<?php echo $user_gender; ?>/<?php echo $user_Email; ?>/Profile/<?php echo $user_pic; ?>" height="60" width="55">  </td>
		<td > </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
		<td colspan="3" style="padding:7;"> <a href="#" style="text-transform:capitalize; text-decoration:none; color:#003399;" onMouseOver="post_name_underLine(<?php echo $postid; ?>)" onMouseOut="post_name_NounderLine(<?php echo $postid; ?>)" id="uname<?php echo $postid; ?>"> <?php echo $user_name; ?> </a>  </td>
		<td> </td>
		<td> </td>
		<td> </td>
	</tr>
<?php
	$len=strlen($post_data[2]);
	if($len>0 && $len<=73)
	{
		$line1=substr($post_data[2],0,73);
	?>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>
	</tr>
	<?php
	}
	else if($len>73 && $len<=146)
	{
		$line1=substr($post_data[2],0,73);
		$line2=substr($post_data[2],73,73);
	?>
	<tr >
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>	
	</tr>
	<tr >
		<td> </td>
		<td colspan="3" style="padding-left:7;"><?php echo $line2; ?> </td>
	</tr>
	<?php
	}
	else if($len>146 && $len<=219)
	{
		$line1=substr($post_data[2],0,73);
		$line2=substr($post_data[2],73,73);
		$line3=substr($post_data[2],146,73);
	?>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line2; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line3; ?> </td>	
	</tr>
	<?php
	}
	else if($len>219 && $len<=292)
	{
		$line1=substr($post_data[2],0,73);
		$line2=substr($post_data[2],73,73);
		$line3=substr($post_data[2],146,73);
		$line4=substr($post_data[2],219,73);
	?>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line2; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line3; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line4; ?> </td>	
	</tr>
	
	
	<?php
	}
	else if($len>292 && $len<=365)
	{
		$line1=substr($post_data[2],0,73);
		$line2=substr($post_data[2],73,73);
		$line3=substr($post_data[2],146,73);
		$line4=substr($post_data[2],219,73);
		$line5=substr($post_data[2],292,73);
	?>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line2; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line3; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line4; ?> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line5; ?> </td>	
	</tr>
	
	
	<?php
	}
	else if($len>365 && $len<=438)
	{
		$line1=substr($post_data[2],0,73);
		$line2=substr($post_data[2],73,73);
		$line3=substr($post_data[2],146,73);
		$line4=substr($post_data[2],219,73);
		$line5=substr($post_data[2],292,73);
		$line6=substr($post_data[2],365,73);
	?>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line2; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line3; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line4; ?> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line5; ?> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line6; ?> </td>	
	</tr>
	
	<?php
	}
	else if($len>438 && $len<=511)
	{
		$line1=substr($post_data[2],0,73);
		$line2=substr($post_data[2],73,73);
		$line3=substr($post_data[2],146,73);
		$line4=substr($post_data[2],219,73);
		$line5=substr($post_data[2],292,73);
		$line6=substr($post_data[2],365,73);
		$line7=substr($post_data[2],438,73);
	?>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line1; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line2; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line3; ?> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line4; ?> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line5; ?> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line6; ?> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"><?php echo $line7; ?> </td>	
	</tr>
	
<?php
}
?>

<?php 
		if($post_data[3]!="")
		{
	?>
	<tr>
		<td>   </td>
		<td colspan="3"><img src="../../fb_users/<?php echo $user_gender; ?>/<?php echo $user_Email; ?>/Post/<?php echo $post_img; ?>" width="400" height="400"> </td>
		<td> </td>
		<td> </td>
	</tr>
	<?php
		}
	?>
	
	<tr style="color:#6D84C4;">
		<td >   </td>
		<?php
		 	$que_status=mysqli_query($conn,"select * from user_post_status where post_id=$postid and user_id=$userid;");
			$que_like=mysqli_query($conn,"select * from user_post_status where post_id=$postid");
			$count_like=mysqli_num_rows($que_like);
			$status_data=mysqli_fetch_array($que_status);
			if($status_data[3]=="Like")
			{?>
			
			<td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="postid" value="<?php echo $postid; ?>">
		<input type="hidden" name="userid" value="<?php echo $userid; ?>">
		<input type="submit" value="Unlike" name="Unlike" style="border:#FFFFFF; background:#FFFFFF; font-size:15px; color:#6D84C4;" onMouseOver="unlike_underLine(<?php echo $postid; ?>)" onMouseOut="unlike_NounderLine(<?php echo $postid; ?>)" id="unlike<?php echo $postid; ?>"></form></td>
			<?php
			}
			else
			{?>
			<td >
		<form method="post">
		<input type="hidden" name="postid" value="<?php echo $postid; ?>">
		<input type="hidden" name="userid" value="<?php echo $userid; ?>">
		<input type="submit" value="Like" name="Like" style="border:#FFFFFF; background:#FFFFFF; font-size:15px; color:#6D84C4;" onMouseOver="like_underLine(<?php echo $postid; ?>)" onMouseOut="like_NounderLine(<?php echo $postid; ?>)" id="like<?php echo $postid; ?>"></form></td>
			<?php
			}
		 ?>
		 <?php
		 
		 	$que_comment=mysqli_query($conn,"select * from user_post_comment where post_id =$postid order by comment_id");
	$count_comment=mysqli_num_rows($que_comment);
		 ?>
		
		<td colspan="3"> &nbsp; <input type="button" value="Comment(<?php echo $count_comment; ?>)" style="background:#FFFFFF; border:#FFFFFF;font-size:15px; color:#6D84C4;" onClick="Comment_focus(<?php echo $postid; ?>);" onMouseOver="Comment_underLine(<?php echo $postid; ?>)" onMouseOut="Comment_NounderLine(<?php echo $postid; ?>)" id="comment<?php echo $postid; ?>">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <span style="color:#999999;">   <?php echo $post_data[4]; ?> </span> </td>
		<td>   </td>
	</tr>
	<tr>
		<td>   </td>
		<td   style="width:9;" colspan="3"><img src="img/like.PNG"><span style="color:#6D84C4;"><?php echo $count_like; ?></span> like this. </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
		<td>   </td>
		<td> </td>
		<td> </td>
		<td> </td>
	</tr>
<?php
	while($comment_data=mysqli_fetch_array($que_comment))
	{
		$comment_id=$comment_data[0];
		$comment_user_id=$comment_data[2];
		$que_user_info1=mysqli_query($conn,"select * from users where user_id=$comment_user_id");
		$que_user_pic1=mysqli_query($conn,"select * from user_profile_pic where user_id=$comment_user_id");
		$fetch_user_info1=mysqli_fetch_array($que_user_info1);
		$fetch_user_pic1=mysqli_fetch_array($que_user_pic1);
		$user_name1=$fetch_user_info1[1];
		$user_Email1=$fetch_user_info1[2];
		$user_gender1=$fetch_user_info1[4];
		$user_pic1=$fetch_user_pic1[2];
?>


	<tr>
		<td> </td>
		<td width="4%" bgcolor="#EDEFF4" style="padding-left:12;" rowspan="2">  <img src="../../fb_users/<?php echo $user_gender1; ?>/<?php echo $user_Email1; ?>/Profile/<?php echo $user_pic1; ?>" height="40" width="47">    </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" > <a href="#" style="text-transform:capitalize; text-decoration:none; color:#3B5998;" onMouseOver="Comment_name_underLine(<?php echo $comment_id; ?>)" onMouseOut="Comment_name_NounderLine(<?php echo $comment_id; ?>)" id="cuname<?php echo $comment_id; ?>"> <?php echo $user_name1; ?></a> </td>
		<td align="right" rowspan="2" bgcolor="#EDEFF4"> 
			<form method="post">  
				<input type="hidden" name="comm_id" value="<?php echo $comment_id; ?>" >
				<input type="submit" name="delete_comment" value="  " style="background-color:#FFFFFF; border:#FFFFFF; background-image:url(img/delete_comment.gif); width:13; height:13;"> &nbsp;
			</form> </td>
</tr>
<?php
	$clen=strlen($comment_data[3]);
	if($clen>0 && $clen<=60)
	{
		$cline1=substr($comment_data[3],0,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<?php
	}
	else if($clen>60 && $clen<=120)
	{
		$cline1=substr($comment_data[3],0,60);
		$cline2=substr($comment_data[3],60,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline2; ?></td>
	</tr>
	<?php
	}
	else if($clen>120 && $clen<=180)
	{
		$cline1=substr($comment_data[3],0,60);
		$cline2=substr($comment_data[3],60,60);
		$cline3=substr($comment_data[3],120,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline2; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline3; ?></td>
	</tr>
	<?php
	}
	else if($clen>180 && $clen<=240)
	{
		$cline1=substr($comment_data[3],0,60);
		$cline2=substr($comment_data[3],60,60);
		$cline3=substr($comment_data[3],120,60);
		$cline4=substr($comment_data[3],180,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline2; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline3; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline4; ?></td>
	</tr>
	<?php
	}
	else if($clen>240 && $clen<=300)
	{
		$cline1=substr($comment_data[3],0,60);
		$cline2=substr($comment_data[3],60,60);
		$cline3=substr($comment_data[3],120,60);
		$cline4=substr($comment_data[3],180,60);
		$cline5=substr($comment_data[3],240,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline2; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline3; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline4; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline5; ?></td>
	</tr>
	<?php
	}
	else if($clen>300 && $clen<=360)
	{
		$cline1=substr($comment_data[3],0,60);
		$cline2=substr($comment_data[3],60,60);
		$cline3=substr($comment_data[3],120,60);
		$cline4=substr($comment_data[3],180,60);
		$cline5=substr($comment_data[3],240,60);
		$cline6=substr($comment_data[3],300,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline2; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline3; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline4; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline5; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline6; ?></td>
	</tr>
	<?php
	}
	else if($clen>360 && $clen<=420)
	{
		$cline1=substr($comment_data[3],0,60);
		$cline2=substr($comment_data[3],60,60);
		$cline3=substr($comment_data[3],120,60);
		$cline4=substr($comment_data[3],180,60);
		$cline5=substr($comment_data[3],240,60);
		$cline6=substr($comment_data[3],300,60);
		$cline7=substr($comment_data[3],360,60);
	?>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline1; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline2; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline3; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline4; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline5; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline6; ?></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> <?php echo $cline7; ?></td>
	</tr>
	<?php
	}
	?>

<?php
}
?>

<tr>
	<td> </td>
	<td width="4%" style="padding-left:17;" bgcolor="#EDEFF4" rowspan="2">  <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:33; width:33;">    </td>
		<td  colspan="2" style="padding-top:15;"> 
		<form method="post" name="commenting" onSubmit="return blank_comment_check()"> 
		<input type="text" name="comment_txt" placeholder="Write a comment..." maxlength="420" style="width:440;" id="<?php echo $postid;?>"> 
		<input type="hidden" name="postid" value="<?php echo $postid; ?>"> 
		<input type="hidden" name="userid" value="<?php echo $userid; ?>"> 
		<input type="submit" name="comment" style="display:none;"> 
		</form> </td>
	</tr>
<tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr>
<?php
	}
?>
</table>
</div>

<script>
	function on_about_bg()
	{
		document.getElementById("about_on_bg").style.display='block';
	}
	function out_about_bg()
	{
		document.getElementById("about_on_bg").style.display='none';	
	}
	function on_photos_bg()
	{
		document.getElementById("photos_on_bg").style.display='block';
	}
	function out_photos_bg()
	{
		document.getElementById("photos_on_bg").style.display='none';	
	}
</script>


<!-- About bg-->
	<a href="about.php"> <div style="position:absolute; left:15%; top:7.22%; background:#18191a; height:3%; width:19.2%; z-index:-1; box-shadow:0px 0px 5px 0px rgb(0,0,0);" onMouseOver="on_about_bg()"> </div>
	<div style="display:none;" id="about_on_bg">	
	<div style="position:absolute; left:17%; top:7.4%; background:#b0b3b8; height:6%; width:20%; z-index:-1;" onMouseOut="out_about_bg()">  </div>
	<div style="position:absolute; left:17%; top:8%;"> <img src="img/edit.PNG"> </div>
	</div>
	</a>	
	<div style="position:absolute; left:23%; top:7.2%;"> <a href="about.php" style="color:white;text-decoration:none;font-size:17px; font-weight:bolder;"> Gioi Thiệu</a> </div>
	<div style="position:absolute; left:15%; top:7.67%; background:#18191a; height:3%; width:19.2%; z-index:-1; box-shadow:0px 2px 5px 0px rgb(0,0,0);"> </div>
		
	<div style="position:absolute;left:19%; top:7.7%; font-weight:bolder; font-size: 20px; color: white;"> Basic Information </div>
	<div style="position:absolute;left:17%; top:8.2%; font-size:17px; color:white;">Birthday</div>
	<div style="position:absolute;left:23%; top:8.2%; font-size:17px;color: white;"> <?php echo $user_bday; ?></div>
	<div style="position:absolute;left:17%; top:8.8%; font-size:17px; color:white;">Gender</div>
	<div style="position:absolute;left:23%; top:8.8%; font-size:17px;color: white;"> <?php echo $gender; ?></div>
	<div style="position:absolute;left:17%; top:9.2%; font-size:17px; color:white;">Current location</div>
	<div style="position:absolute;left:17%; top:9.8%; font-size:17px; color:white;">Hometown</div>
<?php
	$user_info_query=mysqli_query($conn,"select * from user_info where user_id=$userid");
	$user_info_data=mysqli_fetch_array($user_info_query);
	$city=$user_info_data[3];
	$hometown=$user_info_data[4];
	if($city!="")
	{
?>
		<div style="position:absolute;left:23%; top:9.2%; font-size:15px; text-transform:capitalize;">   <?php echo $city; ?>  </div>
<?php
	}
	else
	{
    ?>
	<div style="position:absolute;left:23%; top:9.2%; font-size:15px;"> <a href="about.php" style="text-decoration:none;margin-left: 10px; color:#b0b3b8;"> Add Your City </a> </div>
	<?php
	}
?>
<?php
	if($hometown!="")
	{
?>
		<div style="position:absolute;left:28%; top:9.8%; font-size:15px; text-transform:capitalize;">  <?php echo $hometown; ?>  </div>
<?php
	}
	else
	{
    ?>
		<div style="position:absolute;left:23%; top:9.8%; font-size:15px;"> <a href="about.php" style="text-decoration:none;color:#b0b3b8;"> Add your hometown </a> </div>
	<?php
	}
?>




<!-- Photos bg-->
	<a href="photos.php"> <div style="position:absolute; left:15%; top:11%; background:#18191a; height:6.1%; width:19.2%; z-index:-1; box-shadow:0px 0px 5px 0px rgb(0,0,0);" onMouseOver="on_photos_bg()"> </div>
	<div style="display:none;" id="photos_on_bg">	
	<div style="position:absolute; left:15%; top:11%; background:#b0b3b8; height:6%; width:19.2%; z-index:-1;" onMouseOut="out_photos_bg()">  </div>
	<div style="position:absolute; left:32%; top:12%;"> <img src="img/edit.PNG"> </div>
	</div>
	</a>	
	<div style="position:absolute; left:23%; top:11%;"> <a href="photos.php" style="color:white;text-decoration:none;font-size:20px; font-weight:bold;"> Photos </a> </div>
	
	<div style="position:absolute; left:15%; top:11.8%; background:#18191a; height:6%; width:19.2%; z-index:-1; box-shadow:0px 2px 5px 0px rgb(0,0,0);"> </div>	
	
<?php	
	$img_array = array();
	array_push($img_array,$img);
	while($post_img_data=mysqli_fetch_array($que_post_img))
	{
		array_push($img_array,$post_img_data[3]);
	}
?>
	<div style="position:absolute; left:15.5%; top:12%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img_array[0] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:22%; top:12%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[1] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:28.5%; top:12%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[2] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:15.5%; top:13.5%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[3] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:22%; top:13.5%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[4] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:28.5%; top:13.5%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[5] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:15.5%; top:15%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[6] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:22%; top:15%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[7] ?>" height="90" width="78">  </div>
	<div style="position:absolute; left:28.5%; top:15%;"> <img src="../../fb_users/<?php echo $gender; ?>/<?php echo $user; ?>/Post/<?php echo $img_array[8] ?>" height="90" width="78">  </div>

<?php
		include("Profile_error/Profile_error.php");
?>

</body>
</html>
<?php
	}
	else
	{
		header("location:../../index.php");
	}
?>