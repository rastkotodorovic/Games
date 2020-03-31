<?php


if (unlink('igre.txt')) {
	"cannot be deleted";
} else {
	header('Location: index.php');
}

$myfile = fopen("igre.txt", "w");



fclose($myfile);

header('Location: index.php');