<?php 

require_once('functions.php');

$igre = getAllFromFile('igre.txt');



?>

<!DOCTYPE html>
<html>
<head>
    <title>GAMES</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
    <?php include 'headerandnav.php';?>
    <div class="sve">
        <main id="glavno">
            <?php foreach ($igre as $igra): ?>
                <a href="opis.php?id=<?= $igra[0] ?>">
                    <h2><?= $igra[1]?></h2>
                </a>
                <img src="<?= $igra[2]?>">
            <?php endforeach ?>
        </main>
    </div>
    <?php include'footer.php'?>
</body>
</html>
