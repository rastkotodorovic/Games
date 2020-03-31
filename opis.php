<?php

require_once('functions.php');

$izabranaIgra = null;
foreach (getAllFromFile('igre.txt') as $igra) {
    if ($igra[0] == $_GET['id']) {
        $izabranaIgra = $igra;
    }
}

if (! $izabranaIgra) {
    die('Igra nije pronadjena');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Opis</title>
    <link rel="stylesheet" type="text/css" href="styleee.css">
</head>
<body>
    <?php include 'headerandnav.php';?>
    <div class="sve">
        <main id="opis"> 
            <h2><?= $izabranaIgra[1] ?></h2>
            <img src="<?= $izabranaIgra[2] ?>">
            <h3><?= $izabranaIgra[3]?></h3>
            <h3><?= $izabranaIgra[4]?></h3>
            <h3>Mark<br><?= $izabranaIgra[5]?></h3>
            <form action="deleteonegame.php" method="post">
                <input type="hidden" name="id" value="id=<?= $izabranaIgra[0]?>">
                <button name="obrisati">Delete</button>
            </form>
            <a href="form2.php?id=<?= $igra[0] ?>">Edit</a>

        </main>
    </div>
    <?php include'footer.php'?>
</body>
</html>
