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
$name = htmlspecialchars($_GET['name']);
$Email = htmlspecialchars($_GET['Email']);
$Videogames = htmlspecialchars($_GET['Videogames']);
$Anime = htmlspecialchars($_GET['Anime']);
$Password = htmlspecialchars($_GET['Password']);
    ?>
    
    <h1> Hey there<?= $name ?>! </h1>
    <h2> Here is your email: <?=$Email ?> </h2>
    <h3> Your most played Videogame is: <?=$Videogames?> </h3>
    <h3> Your Fave Anime is: <?=$Anime?> </h3>
    <h3> your password: <?=$Password?> </h3>

</body>
</html>