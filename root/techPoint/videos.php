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
    
    $query = mysqli_query($con,"SELECT * FROM videos");
    while($row = mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $name = $row['name'];
        
        echo "<a href='watch.php?id=$id'>   $name   </a>    <br/>";
    }
    
?>


</html>