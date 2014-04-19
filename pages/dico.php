<?php 
$dico = $_GET['mot'];
// $str = preg_replace('#_#','', $dico);
$hashmot = sha1($dico);
$db->query("INSERT INTO sha1_tcrypt VALUES ('','".$dico."','".$hashmot."')");
?>
