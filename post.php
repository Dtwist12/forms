<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$Gamername = htmlspecialchars($_POST['Gamername']);
$Console = htmlspecialchars($_POST['Console']);
$Series = htmlspecialchars($_POST['Series']);
$Condition =htmlspecialchars($_POST['Condition']);
$Game = htmlspecialchars($_POST['Game']);
?>

<h1> Hello <?=$Gamername?> </h1>
<h3> The Console you want is: <?=$Console?> </h3>
<h3> The Console series you want is: <?=$Series?> </h3>
<h3> The Condition you want it in is:<?=$Condition?> </h3>
<h3> The game you want with it is:<?=$Game?> </h3>

</body>
</html>