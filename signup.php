<?php
      include("connect.php");
      include("processsignup.php");

      $first_name = "";
      $last_name = "";
      $gender = "";
      $email = "";

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      	$signup = new Signup();
      	$result=$signup->evaluate($_POST);

      	if($result != ""){

      		echo"<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
      		echo "The following errors occured<br><br>";
      		echo $result;
      		echo"</div>";

      	}else{
             header("Location: login.php");
             die;
      	}

      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];


      }
?>

<!DOCTYPE html>
<html lang="vi" id="facebook" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-Đăng nhập hoặc đăng ký</title>
    

</head>
<style >
	#bar{height:100px;
	 background-color: rgb(59, 89, 152);
	 color: #d9dfeb;
	  font-size: 40px;

	}
	#signup_button{
		margin-right: 80px;
		background-color: #42b72a;
		text-align: center;
		padding: 4px;
		border-radius: 4px;
		float: right;
	}
	#bar2{
		background-color: white; 
		width: 700px; 
		 margin:auto; margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
		text-align: center;
         font-weight: bold;

	}
	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa ;
		padding: 4px;
		font-size: 14px;
	}
	#button{
		width: 300px;
		height: 40px;
		border-radius: 4px;
		font-weight: bold;
		background-color: rgb(59, 89, 152);
		border: none;
		color: white;
	}
</style>
<body style="font-family: tahoma; background-color: #e9ebee;">
	<div id="bar">
		<div style="font-size: 40px;">FACEBOOK </div>
	

	<div id="signup_button">
		<a href="login.php">Log in</a>
	</div></div>
	<div id="bar2">
		Sign up to Facebook<br><br>
		<form action="" method="post">
		<input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First name"><br><br>

		<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last name"><br><br>
		<span>Gender:</span><br>
		<select id="text" name="gender">
			<option><?php echo $gender ?></option>
			<option>Male</option>
			<option>Female</option>
		</select><br><br>
		<input  value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="email"><br><br>
		<input name="password" type="password" id="text" placeholder="Password"><br><br>
		<input name="password2" type="password" id="text" placeholder="retype Password"><br><br>
		<input type="submit" id="button" value="Sign up">
		<br><br><br>
	</form>
	</div>
    

</body>