<?php 
    $offer = $_GET['offer'];
    $user = $_SESSION['user'];
    var_dump($user);
    $data = "\n{$user},{$offer}";
    file_put_contents("leaderboard.txt", $data, FILE_APPEND);
?>
<html>
<head>
    <title>Congratulations!</title>
    <link rel="stylesheet" type="text/css" href="./game.css">
</head>
<body>
    <div id="box">
        <p>Congratulations! You won <strong>$<?=round($offer,2)?></strong></p>
        <img src="giphy.gif" alt="dealornodeal" class="pic">
        <p>
            <a href="./leaderboard.php"><button>Leaderboard</button></a>
        </p>
    </div>
</body>
</html>