<?php
$players = fopen("leaderboard.txt", "r");
echo "<table>";
echo "<tr id =title>Leaderboard</tr>";

while(!feof($players)) {
    $line = fgets($players);
    $playerData = explode(",", $line);

    echo "<tr>";
    echo "<td>" . $playerData[0] . "</td>";
    echo "<td>" . $playerData[1] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

<html>
<head>
<title>Leaderboard</title>
<link rel="stylesheet" href="./style.css">
</head>
<a href="./login.php"><button id ="startbtn">Home</button></a>
</html>