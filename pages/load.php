<?php

$f = fopen("pages/dico.txt", "r");

while(!feof($f)) {
	$dico = fgets($f);
	file_get_contents("http://127.0.0.1/projets/tcrypt/?page=dico&mot={$dico}");
}

fclose($f);
?>

