<?php 

require_once('functions.php');




$igre = getAllFromFile('igre.txt');
	
unlink('igre.txt');

$myfile = fopen("igre.txt", "w");


foreach ($igre as $igra) {
    if ($igra[0] == $GET_['id']) {
    	continue;   	
    } else {
    	fwrite(saveToFile('igre.txt', $igra));
    }
};
	
fclose($myfile);


header('Location: index.php');








