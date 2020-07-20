<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Upload </title>
<link rel="stylesheet" href="../CSS/video_style_2.css"> 
<link rel="stylesheet" href="../CSS/menubar_style.css">
</head>
    
<body>
	<div class="menu-bar">
	<ul>
		<li class="active"><a href="index.html" title="Home Page">Home</a></li>
		<li class="hover-me"><a href="#">Course</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#">Course Information</a></li>
					<li><a href="#">Videos</a>
						<div class="sub-menu-2">
							<ul>
							<li><a href="http://localhost/techPoint/PHP/index.php">Add Videos</a></li>
							<li><a href="http://localhost/techPoint/PHP/videos.php">Check Videos</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</li>
		<li><a href="#">Quizes</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#">Add Quizes</a></li>
					<li><a href="quiz.html">Check Quizes</a></li>
				</ul>
			</div>
		</li>
		<li><a href="#">Forum</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#">Create a Forum</a></li>
					<li><a href="#">Join a Forum</a></li>
				</ul>
			</div>
		</li>
		<li><a href="#">Account</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#">Account Information</a></li>
					<li><a href="#">Sign up</a></li>
					<li><a href="#">Log in</a></li>
				</ul>
			</div>
		</li>
		
		<li><a href="#">Help</a></li>
	</ul>
</div>
	
	<div class="interaction">
    <form action="index.php" method="POST" enctype ="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="Upload!" />
    </form>
    <div>

</body>

<?php



$con=mysqli_connect("localhost","root","","upload");

if(isset($_POST['submit'])){
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $local_file = "uploaded/";

    move_uploaded_file($temp,$local_file.$name);
    $sql = "INSERT INTO videos (name) VALUE ('$name')";
    $resule = mysqli_query($con,$sql) or die("bad query:$sql");
    echo "Good query!";
}


?>


    
    
</html>