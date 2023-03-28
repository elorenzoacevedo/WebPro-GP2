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
        $playerData[1] = trim($playerData[1]);
        $playerData[1] = trim($playerData[1], "$");
        $leaderboard[$count] = ["user" => $playerData[0], "score" => floatval($playerData[1])];
        $count++;
    }
}
usort($leaderboard, "cmp");

echo "<table>";
echo "<tr id =title>Leaderboard</tr>";

foreach($leaderboard as $user){
    echo "<tr>";
        echo "<td>" . $user['user'] . "</td>";
            echo "<td>" . $user['score'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

<html>

<head>
    <title>Leaderboard</title>
    <link rel="stylesheet" href="./style.css">
</head>
<a href="./login.php"><button id="startbtn">Home</button></a>

</html>