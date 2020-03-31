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
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <?php include 'headerandnav.php';?>
    <div class="sve">
        <main id="glavnoo">
            <h1>Add your game</h1>
            <form action="create.php" method="POST">
                <input type="text" name="ime" placeholder="Name"
                value="<?= $izabranaIgra[1]?>" required><br>
                <input type="text" name="slika" placeholder="Picture" value="<?= $izabranaIgra[2]?>" required><br>
                <textarea placeholder="Description"  name="opis" value="<?= $izabranaIgra[3]?>" required></textarea><br>
                <input type="number" name="datum" placeholder="Realase date" value="<?= $izabranaIgra[4]?>" required><br>
                <input type="number" name="ocjena" placeholder="Mark" value="<?= $izabranaIgra[5]?>" required><br>
                <button name="dugme">Submit</button>
            </form>
        </main>
    </div>
    <?php include'footer.php'?>
</body>
</html>
