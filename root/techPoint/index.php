<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> TEST </title>
<link rel="stylesheet" href="styles.css">
</head>
    
<body>
	<div class="navigation">
    <a href="videos.php"> Videos </a>
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