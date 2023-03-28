<?php 
session_start();
session_destroy();
 ?>
<html> 
<head>
<title>Login</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<img src="pic.jpg" alt="dealornodeal" class="center"> 
<form action ="./index.php" method = "get" name ="submit">
    <p class= "start">
        <label for = "name"> Name: </label>
        <input  name = "name" type = "text" size ="16">
    </p>
    <p>
        <a href="./index.php"><button id="startbtn">ENTER</button></a>
    </p>
</form>
</body>
</html>