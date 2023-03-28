<?php 
    //Initialize session user
    session_start();
    $_SESSION['user'] = $_GET['name'];
?>
<html>
<head>
    <Title> Deal or No Deal</Title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
</head>
<body>
    <img src="deal-no.gif" alt="dealornodeal" class="center">    
    <a href="./game.php"><button id="startbtn">START GAME</button></a>
    <p class="start">
        <button type="button"><a href="./leaderboard.php">Leaderboard</a></button>  
    </p>
</body>
</html>