<?php

$con=mysqli_connect("localhost","root","","upload");

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> TEST </title>
</head>
    
<body>

    
</body>

<?php
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "select name from videos where id=$id";
        $query = mysqli_query($con,$q);
        while($row = mysqli_fetch_assoc($query)){
            $name = $row['name'];
        }
        echo "You are watching ".$name."</br>";
        echo "<video width='640' height = '480' controls src='C:\Users\andre\Desktop\2mbvideo.mp4'  type = 'video/mp4'> ";
    }
    else{
        echo "Error!";
    }
  
    
?>


</html>