<?php
function cmp($a, $b){
    return $b["score"] - $a["score"];
}

$players = fopen("leaderboard.txt", "r");
$count = 0;
$leaderboard = array();


while (!feof($players)) {
    $line = fgets($players);
        if($line != ""){
        $playerData = explode(",", $line);
        trim($playerData[1], "$");
        var_dump($playerData);
        print("\n");
        $leaderboard[$count] = ["user" => $playerData[0], "score" => floatval($playerData[1])];
        $count++;
    }
}
var_dump($leaderboard);
uasort($leaderboard, "cmp");
var_dump($leaderboard);

?>

<html>

<head>
    <title>Leaderboard</title>
    <link rel="stylesheet" href="./style.css">
</head>
<a href="./login.php"><button id="startbtn">Home</button></a>

</html>