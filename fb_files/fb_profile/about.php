<?php
	session_start();
	if(isset($_SESSION['fbuser']))
	{
		$user=$_SESSION['fbuser'];
		$conn=mysqli_connect("localhost","root","","1951060885_facebook");
		
		$query1=mysqli_query($conn,"select * from users where Email='$user'");
		$rec1=mysqli_fetch_array($query1);
		$userid=$rec1[0];
?>
<?php
	if(isset($_POST['work_sub']))
	{
		$u_job=$_POST['job'];
		$u_edu=$_POST['edu'];
		mysqli_query($conn,"update user_info set job='$u_job',school_or_collage='$u_edu' where user_id=$userid;");
	}
	
	if(isset($_POST['leving_sub']))
	{
		$u_city=$_POST['city'];
		$u_hometown=$_POST['hometown'];
		mysqli_query($conn,"update user_info set  	current_city='$u_city',hometown='$u_hometown' where user_id=$userid;");
	}
	
	if(isset($_POST['basic_sub']))
	{
		if($_POST['day']=='Day:' && $_POST['month']=='Month:' && $_POST['year']=='Year:')
		{
			$u_relationship=$_POST['relationship'];
			mysqli_query($conn,"update user_info set relationship_status='$u_relationship' where user_id=$userid;");
		}
		else
		{
			$day=intval($_POST['day']);
			$month=intval($_POST['month']);
			$year=intval($_POST['year']);
			if(checkdate($month,$day,$year))
			{
				$u_relationship=$_POST['relationship'];
				$u_birthday_date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
				mysqli_query($conn,"update user_info set relationship_status='$u_relationship' where user_id=$userid;");
				mysqli_query($conn,"update users set Birthday_Date='$u_birthday_date' where user_id=$userid;");
			}
			else
			{
				echo "<script>
				alert('The selected date is not valid.');
					</script>";
			}
		}
	}
	if(isset($_POST['contact_sub']))
	{
		$u_m_no=$_POST['mno'];
		$u_priority=$_POST['priority'];
		$u_web=$_POST['web'];
		$u_fb_id=$_POST['fbid'];
		mysqli_query($conn,"update user_info set mobile_no='$u_m_no',mobile_no_priority='$u_priority',website='$u_web',Facebook_ID='$u_fb_id' where user_id=$userid;");
	}
	
		include("background.php");
		
		$user_info_query=mysqli_query($conn,"select * from user_info where user_id=$userid");
		$user_info_data=mysqli_fetch_array($user_info_query);
?>
<html>
<head>
<title><?php echo $name; ?></title>
	<link href="about_css/about.css" rel="stylesheet" type="text/css">
	<script src="about_js/about.js"></script>
</head>
<body bgcolor="#E9EAED">

<?php
	$que_post_img=mysqli_query($conn,"select * from user_post where user_id=$userid and post_pic!='' order by post_id desc");
	$photos_count=mysqli_num_rows($que_post_img);
	$photos_count=$photos_count+$count1+1;
?>








<div style="position:absolute;left:23%; display:none; top:6.4%; height:1%; width:5%; background-color:#E8E8E8; z-index:1;" id="about_txt_background"> </div>
<div style="position:absolute;left:17.2%; top:6.5%; font-weight:bold; z-index:1;color: #b0b3b8;"> <a href="Profile.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_timeline_txt();" onMouseOut="out_timeline_txt();">  Bai Viet  </a> </div>

<div style="position:absolute;left:23%; top:6.5%; font-weight:bold; z-index:1;color:#b0b3b8;"><a href="about.php" style="text-decoration:none; color:#b0b3b8; ">Gioi Thiệu</a>  </div>
<div style="position:absolute;left:29%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8; "> Bạn bè </a>  </div>


<div style="position:absolute;left:34%; top:6.5%; font-weight:bold; z-index:1; color:#b0b3b8;"> <a href="photos.php" style="text-decoration:none; color:#b0b3b8;" onMouseOver="on_photos_txt();" onMouseOut="out_photos_txt();">  Photos </a> <samp style="color:#717171;"> <?php echo $photos_count; ?> </samp> </div>


<div style="position:absolute;left:40%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Xem thêm </a>  </div>
<div style="position:absolute;left:53%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Thêm Vào tin </a>  </div>
<div style="position:absolute;left:61%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> Chỉnh sửa trang cá nhân  </a>  </div>
<div style="position:absolute;left:75%; top:6.5%; font-weight:bold; z-index:1;"> <a  style="text-decoration:none; color:#b0b3b8;"> <i class="bi bi-list"></i> </a>  </div>

	
       
 <!--Work and education--> 
 <div style="position:absolute;left:17%;top:7%;color: #006400;"> <h3> Work and education </h3> </div>

<div id="work_static" onClick="work_static_hide()">   
<div style="position:absolute;left:19%;top:7.6%;"> <img src="img/job.PNG"> </div>
<?php
	$job=$user_info_data[1];
	$school_or_collage=$user_info_data[2];
	if($job!="")
	{
?>
		<div style="position:absolute;left:26%;top:8%; color:#FF0000; font-weight:bold;"> <?php echo $job; ?> </div>
<?php
	}
	else
	{
?>
		<div style="position:absolute;left:26%;top:8.1%; color:#3B59A4; font-weight:bold; "> Add a job </div>
<?php	
    }
?>
<div style="position:absolute;left:19%;top:8.8%;"> <img src="img/school.PNG"> </div>
<?php
	if($school_or_collage!="")
	{
?>
		<div style="position:absolute;left:26%;top:9%; color:#FF0000; font-weight:bold;"> <?php echo $school_or_collage; ?> </div>
<?php
	}
	else
	{
?>
		<div style="position:absolute;left:26%;top:9.1%; color:#3B59A4; font-weight:bold;"> Add a school or college </div>
<?php
	}
?>


<div style="position:absolute;left:43.5%;top:9.2%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="work_static_hide()"> </div> 
</div>

<form method="post" style="display:none"  id="Work_form">
<div style="position:absolute;left:19%;top:7.6%;color:#3B59A4;"> Job </div>
<div style="position:absolute;left:19%;top:8%;"> <input type="text" value="<?php echo $job; ?>" name="job" style="height:33;width:350;font-size:16px;" maxlength="35"> </div>
<div style="position:absolute;left:19%;top:8.6%;color:#3B59A4;"> School or College </div>
<div style="position:absolute;left:19%;top:9%;"> <input type="text" value="<?php echo $school_or_collage; ?>" name="edu" maxlength="35" style="height:33;width:350;font-size:16px;"> </div>

<div style="position:absolute;left:24%;top:9.8%;"> <input type="submit" value="Save" name="work_sub" class="save_button" > </div>
<div style="position:absolute;left:32%;top:9.8%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="work_form_hide()"> </div>

</form>


<div style="position:absolute;left:48.2%; top:7%; height:120%; width:0.05%; background:#CCC;">
</div>

<!--Living-->
<div style="color: #006400;position:absolute;left:51%;top:7%;"> <h3> Living </h3> </div>
<div id="Living_static" onClick="Living_static_hide()"> 
<div style="position:absolute;left:53%;top:97%;"> <img src="img/city.PNG"> </div>

<?php
	$city=$user_info_data[3];
	if($city!="")
	{
?>
		<div style="position:absolute;left:60%;top:7.6%; font-weight:bold;text-transform:capitalize;"> <?php echo $city; ?> </div>

<?php
	}
	else
	{
?>
		<div style="position:absolute;left:60%;top:7.6%; color:#3B59A4; font-weight:bold;"> Add Your Current City </div>
<?php
	}	
?>
<div style="position:absolute;left:53%;top:7.6%;"> <img src="img/hometown.PNG"> </div>
<?php
	$hometown=$user_info_data[4];
	if($hometown!="")
	{
?>
		<div style="position:absolute;left:60%;top:8.5%; color:#000; font-weight:bold; text-transform:capitalize;"> <?php echo $hometown; ?> </div>
<?php
	}
	else
	{
?>
		<div style="position:absolute;left:60%;top:8.3%; color:#3B59A4; font-weight:bold;"> Add your hometown </div>
<?php
	}
?>


<div style="position:absolute;left:80%;top:8.8%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="Living_static_hide()"> </div> 
</div>

<form method="post" style="display:none" id="Living_form">
<div style="position:absolute;left:53%;top:7.6%;color:#3B59A4;"> Current City </div>
<div style="position:absolute;left:53%;top:7.9%;"> <input type="text" value="<?php echo $city; ?>" name="city" style="height:33;width:350;font-size:16px;" onKeyPress="return isStringKey(event)" maxlength="15"> </div>
<div style="position:absolute;left:53%;top:8.7%;color:#3B59A4;"> hometown </div>
<div style="position:absolute;left:53%;top:9%;"> <input type="text" value="<?php echo $hometown; ?>" name="hometown" onKeyPress="return isStringKey(event)" maxlength="15" style="height:33;width:350;font-size:16px;"> </div>

<div style="position:absolute;left:59%;top:9.4%;"> <input type="submit" value="Save" name="leving_sub" class="save_button"> </div>
<div style="position:absolute;left:67%;top:9.4%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="living_form_hide()"> </div>

</form>

<div style="position:absolute;left:17%; top:11%; height:0.09%; width:66%; background:#CCC; z-index:1">
</div>

 <!--Basic Information--> 
 <?php
	$user_data_query=mysqli_query($conn,"select * from users where Email='$user'");
	$user_data=mysqli_fetch_array($user_data_query);
	$bday=$user_data[5];
	$gender=$user_data[4];
	$Emial_id=$user_data[2];
?>

 <div style="position:absolute;left:17%;top:11.4%;color: #006400;"> <h3> Basic Information </h3> </div>
 
<div id="basic_static" onClick="basic_static_hide()"> 

 <div style="position:absolute;left:19%;top:11.9%; font-size:18px; color:white;"> Birthday </div>
 <div style="position:absolute;left:25%;top:11.9%; font-size:18px;color: #FF0000;"> <?php echo $bday; ?> </div>

<div style="position:absolute;left:19%; top:12.4%; font-size:18px; color:white;">Gender</div>
<div style="position:absolute;left:25%;top:12.4%; font-size:18px;color: #FF0000"> <?php echo $gender; ?> </div>


<div style="position:absolute;left:19%; top:12.9%; font-size:18px; color:white;">Relationship </div>
<?php
	$relationship=$user_info_data[5];
	if($relationship!="")
	{	
?>
		<div style="position:absolute;left:27%;top:12.9%;color: #FF0000"> <?php echo $relationship; ?> </div>
<?php
	}
	else
	{
?>
		<div style="position:absolute;left:27%;top:12.9%; color:#3B59A4; font-weight:bold;"> Add Relationship </div>
<?php
	}
?>
<div style="position:absolute;left:43.5%;top:13%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="basic_static_hide()"> </div> 
</div>

<form method="post" style="display:none" id="basic_form">
<div style="position:absolute;left:19%;top:12.3%; font-size:18px; color:#89919C;"> Birthday </div>


<div style="position:absolute; left:25%; top:12.3%;">
	<select name="day" style="width:61;font-size:15px;height:29;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	
    
    <div style="position:absolute;left:30%; top:12.3%;">
	<select name="month" style="width:78;font-size:15px;height:29;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>
    
    
    <div style='position:absolute;left:36.3%;top:12.3%;'>
	<select name="year" style="width:66; font-size:15px; height:29; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
    
    <div style="position:absolute;left:19%; top:12.7%; font-size:18px; color:#89919C;">Gender</div>
<div style="position:absolute;left:25%;top:12.7%; font-size:18px;color: #FF0000"> <?php echo $gender; ?> </div>

<div style="position:absolute;left:19%; top:13.1%; font-size:18px; color:#89919C;">Relationship </div>


<div style="position:absolute;left:27%; top:13.1%;">
	<select name="relationship" style="font-size:15px;height:29;padding:3;">
	<option value=""> ------------ </option>
	
	<script type="text/javascript">
	
		var rel=new Array("Single","In a relationship","Engaged","Married","Its complicated","In an open relationship","Windowed","Separated","Divoced");
		for(i=0;i<=rel.length-1;i++)
		{
			document.write("<option value='"+rel[i]+"'>" + rel[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>
    
    <div style="position:absolute;left:24%;top:13.6%;"> <input type="submit" value="Save" name="basic_sub" class="save_button"> </div>
<div style="position:absolute;left:32%;top:13.6%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="basic_form_hide()"> </div>

</form>




<!--Contact Information--> 

<div style="position:absolute;left:51%;top:11.5%;color: #006400;"> <h3> Contact Information </h3> </div>

<div id="contact_static" onClick="contact_static_hide()">
<div style="position:absolute;left:53%;top:11.9%; font-size:18px; color:white;"> Mobile Phones </div>
<?php
	$m_no=$user_info_data[6];
	if($m_no!=0)
	{
?>
		<div style="position:absolute;left:62%;top:11.9%; font-size:18px;color: #FF0000"> <?php echo $m_no; ?> </div>
<?php
		$m_no_priority=$user_info_data[7];
		if($m_no_priority=="Private")
		{
?>	
			<div style="position:absolute;left:70%;top:12.2%;"> <img src="img/only_me.PNG"> </div>
	
<?php			
		}
	}
	else
	{
?>
		<div style="position:absolute;left:62%;top:12.4%; color:white; font-weight:bold;"> Add Mobile Number </div>
		
<?php
	}
?>

<div style="position:absolute;left:53%; top:12.3%; font-size:18px; color:white;">Email</div>

<div style="position:absolute;left:58%;top:12.3%; font-size:18px;color: #FF0000"> <?php echo $Emial_id; ?> </div>
   <div style="position:absolute;left:53%; top:12.8%; font-size:18px; color:white;">Website</div>
  
<?php
	$web=$user_info_data[8];
	if($web!="")
	{
?>
		<div style="position:absolute;left:59%;top:13.2%; color:#3B59A4; font-weight:bold;"> <?php echo $web; ?> </div>
<?php
	}
	else
	{
?>
		<div style="position:absolute;left:59%;top:12.8%; color:#3B59A4; font-weight:bold;"> Add Website </div>
<?php
	}
?> 

<div style="position:absolute;left:53%; top:13.2%; font-size:18px; color:white;">Facebook ID </div>

<?php
	$fb_id=$user_info_data[9];
	if($fb_id!="")
	{
?>
		<div style="position:absolute;left:61%;top:13.4%; color:#3B59A4; font-weight:bold;"> <?php echo $fb_id; ?> </div>
		
<?php
	}
	else
	{
?>
		<div style="position:absolute;left:61%;top:13.2%; color:#3B59A4; font-weight:bold;"> Add Facebook ID </div>
<?php
	}
?> 

<div style="position:absolute;left:80%;top:13.4%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="contact_static_hide()"> </div> 
</div>

<form method="post" style="display:none" name="contact" id="contact_form" onSubmit="return contact_check()">
<div style="position:absolute;left:53%;top:12%; font-size:18px; color:white;"> Mobile Phones </div>
<div style="position:absolute;left:62%;top:12%;"> <input type="text" value="<?php echo $m_no; ?>" name="mno" onKeyPress="return isNumberKey(event)" style="height:33;width:150;font-size:16px;" maxlength="10"> </div>

<div style="position:absolute;left:74%;top:12%;">
	<select style="height:33;font-size:19px;" name="priority">
    	<option value="Private"> Only me </option>  
		<option value="Public"> Public </option> 
	</select>
</div>

<div style="position:absolute;left:53%; top:12.4%; font-size:18px; color:white;">Email</div>

<div style="position:absolute;left:61%;top:12.4%; font-size:18px;"> <input type="text" value="<?php echo $Emial_id; ?>" style="height:33; width:300; color:#FF0000; font-size:16px; "  disabled></div>
    
  <div style="position:absolute;left:53%; top:12.8%; font-size:18px; color:white;">Website</div>
<div style="position:absolute;left:61%;top:12.8%;"> <input type="text" value="<?php echo $web; ?>" name="web" maxlength="40" style="height:33;width:300;font-size:16px;"> </div>
<div style="position:absolute;left:53%; top:13.2%; font-size:18px; color:white;">Facebook ID </div>
<div style="position:absolute;left:61%;top:13.2%;"> <input type="text" value="<?php echo $fb_id; ?>" name="fbid" maxlength="40" style="height:33;width:300;font-size:16px;"> </div>

<div style="position:absolute;left:59%;top:13.7%;"> <input type="submit" value="Save" name="contact_sub" class="save_button"> </div>
<div style="position:absolute;left:67%;top:13.7%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="contact_form_hide()"> </div>

</form>



<div style="position:absolute;left:58%;top:13.9%; display:none;" id="mobile_no_erorr"><img src="img/wrong.png"> The phone number is invalid.</div>

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