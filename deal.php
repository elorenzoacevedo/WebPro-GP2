<?php 
    session_start();
    $offer = $_GET['offer'];
    $offer = round($offer, 2);
    $user = $_SESSION['user'];
    $data = "{$user},{$offer}\n";
    file_put_contents("leaderboard.txt", $data, FILE_APPEND);
?>
<html>
<head>
    <title>Congratulations!</title>
    <link rel="stylesheet" type="text/css" href="./game.css">
</head>
<body>
    <div id="box">
        <p>Congratulations! You won <strong>$<?=$offer?></strong></p>
        <img src="giphy.gif" alt="dealornodeal" class="pic">
        <p>
            <a href="./leaderboard.php"><button>Leaderboard</button></a>
        </p>
    </div>
</body>
</html>