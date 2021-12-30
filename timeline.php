<!DOCTYPE html>
<html>
<head>
	 <title>
	 	Profile
	 </title>
	</head>
	<style type="text/css">
		#blue_bar{
			height: 50px;
			background-color: #405d9b;
			color: #d9dfeb;

		}
		#search_box{
			width: 400px;
			height: 20px;
			border-radius: 5px;
			border: none;
			padding: 4px;
			font-size: 14px;
			background-image: url(socialimages/search.png);
			background-repeat: no-repeat;
			background-position: right;

		}
		#Profile{
			width: 150px;
			margin-top: -200px;
			border-radius: 50%;
			border: solid 2px white;


		}
		#menu_button{
			width: 100%;
			 display: inline;
			 margin: 2px;

		}
		#friends_img{
			width: 75px;
			float: left;
			margin: 8;
		}
		#friends_bar{
            background-color: white;
            min-height:400px ;
            margin-top: 20px;
            color: #aaa;
            padding: 8px;
            text-align: center;
            font-size: 20px;
            color: #405d9b;

            
		}
		#friends{
			clear: both;
			font-size: 12px;
			font-weight: bold;
			color: #405d9b;
			padding: 20px;

		}
		textarea{
             width: 100%;
             border: none;
             font-family: tahoma;
             font-size: 14px;
             height: 50px;
		}
		#post_button{
			float: right;
			background-color: #405d9b;
			border: none;
			color: white;
			margin-top: -5px;
			margin-right: 0;
			padding: 10px;
			font-size: 14px;
			border-radius: 2px;
			width: 50px;
		}
		#post_bar{
			margin-top: 20px;
			background-color: white;
			padding: 10px;
		}
		#post{
			padding: 4px;
			font-size: 13px;
			display: flex;
		}
	</style>
	<body style="font-family:tahoma; background-color: #d0d8e4;">
		<div id="blue_bar">
			<div style="width: 800px;margin: auto; font-size: 30px; ">

				Facebook <input type="text" id="search_box" placeholder="Search for people">
				<img src="socialimages/selfie.jpg" style="width: 50px; float: right;">
			</div>
			
		</div>
		<!--COVER-AREA-->
		<div style="width: 800px; margin: auto; background-color:white; min-height: 400px; ">
			<div style="background-color: white;text-align: center; color: #405d9b">
				<img src="socialimages/mountain.jpg" style="width: 100%;">
				<img src="socialimages/selfie.jpg" id="Profile">
				<br>
				 <div style="font-size: 20px;">Mary Banda</div>
				<br>
				<div id="menu_button">Timeline</div>
				 <div id="menu_button"> About</div>
				  <div id="menu_button">Friends</div> 
				  <div id="menu_button">Photo</div> 
				  <div id="menu_button"> Settings</div>
			</div>
			<!--below cover area-->
			<div style="display: flex;">
				<!--friends area-->
				<div style=" min-height: 400px;flex: 1;">
					<div id="friends_bar">

						<img src="socialimages/selfie.jpg" id="profile_pic" style="width: 70%; border-radius: 50%;"><br>
						Mary banda
						</div>
				</div>
				<!--post are-->
				<div style="min-height: 400px; flex: 2.5;padding: 20px; padding-right: 0px;">
					<div style="border: solid thin #aaa; padding: 10px; background-color: white;">
						<textarea placeholder="What your you mind?"></textarea>
						<input id="post_button" type="submit" value="post">
						<br>
					</div>
					<!--post-->
					<div id="post_bar">
						<div id="post">
							<div>
								<img src="socialimages/user1.jpg" style="width: 75px;margin-right: 4px;">
							</div>
							<div>
								<div style="font-weight: bold;">First Guy</div>
								Lorem ip sdjsdjsdja jdshsjdjsdjskd jshdjkskd sdhjsdkvnnvkknvvndfjidvkcn ndjfnd<br/><br/>
								<a href="#">Like</a>. <a href="#">Comment</a> . <span style="color: #999;">April 23 2021</span>
							</div>
						</div>
						<div id="post">
							<div>
								<img src="socialimages/user2.jpg" style="width: 75px;margin-right: 4px;">
							</div>
							<div>
								<div style="font-weight: bold;">First Guy</div>
								Lorem ip sdjsdjsdja jdshsjdjsdjskd jshdjkskd sdhjsdkvnnvkknvvndfjidvkcn ndjfnd<br/><br/>
								<a href="#">Like</a>. <a href="#">Comment</a> . <span style="color: #999;">April 23 2021</span>
							</div>
						</div>
						<div id="post">
							<div>
								<img src="socialimages/user3.jpg" style="width: 75px;margin-right: 4px;">
							</div>
							<div>
								<div style="font-weight: bold;">First Guy</div>
								Lorem ip sdjsdjsdja jdshsjdjsdjskd jshdjkskd sdhjsdkvnnvkknvvndfjidvkcn ndjfnd<br/><br/>
								<a href="#">Like</a>. <a href="#">Comment</a> . <span style="color: #999;">April 23 2021</span>
							</div>
						</div>


					</div>
				</div>
			</div>
			
			</div>
	</body>
	</html>