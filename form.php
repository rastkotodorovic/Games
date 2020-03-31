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
                <input type="text" name="ime" placeholder="Name" required><br>
                <input type="text" name="slika" placeholder="Picture" required><br>
                <textarea placeholder="Description" name="opis" required></textarea><br>
                <input type="number" name="datum" placeholder="Realase date" required><br>
                <input type="number" name="ocjena" placeholder="Mark" required><br>
                <button name="dugme">Submit</button>
            </form>
        </main>
    </div>
    <?php include'footer.php'?>
</body>
</html>
