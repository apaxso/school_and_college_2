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


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> TEST </title>
</head>
    
<body>
    <a href="videos.php"> Videos </a>
    <form action="index.php" method="POST" enctype ="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="Upload!" />
    </form>
          

</body>



    
    
</html>