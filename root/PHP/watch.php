<?php

$con=mysqli_connect("localhost","root","","upload");

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> TEST </title>
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
	
	<div class="b">
		<video style="display:block; margin: 0 auto;" width='750' height='600' controls > \
			
			<source src="<?php echo 'https://cdn.bitdegree.org/learn/Pexels%20Videos%203373.mp4?raw=true' ?>" type='video/mp4'>
		</video>
	</div>
	
	
    
</body>
</html>
<?php
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "select name from videos where id=$id";
        $query = mysqli_query($con,$q);
        while($row = mysqli_fetch_assoc($query)){
            $name = $row['name'];
        }
       
        
    }
    else{
        echo "Error!";
    }
  
    
?>


