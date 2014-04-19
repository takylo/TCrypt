<?php 

 function totalHashDecryptMd5(){   
	global $db;
	$req = $db->query('SELECT COUNT(id) as id FROM md5');
	$donnees = $req->fetch();
	$req->closeCursor();
	echo $donnees['id'];

}
 function totalHashDecryptSha1(){
	global $db;
	$req = $db->query('SELECT COUNT(id) as id FROM tcrypt_sha1');
	$donnees = $req->fetch();
	$req->closeCursor();
	echo $donnees['id'];
}
?>
<div class="container">
	<center>
		<h2>TCrypt Crypt/Decrypt sha1,md5</h2>
	<div class="container">	<p><h5>TCrypt c'est quoi ? TCrypt est un crypteur / decrypteur sha1/md5 qui crack le hash du md5/sha1 par " force brute " c'est a dire qui cherche un mot ayant le meme hash dans notre immense base de donnée</h5></p>
</div>		<br><br>
		<div class="panel panel-primary" style='width:43%;'>
			<div class="panel-heading">
				<h3 class="panel-title">MD5 Decrypt</h3>
			</div>
			<div class="panel-body">
				Total hash decrypt : <?php totalHashDecryptMd5(); ?>
			</div>
		</div>
		<div class="panel panel-primary" style='width:43%;'>
			<div class="panel-heading">
				<h3 class="panel-title">SHA1 Decrypt</h3>
			</div>
			<div class="panel-body">
				Total hash decrypt : <?php totalHashDecryptSha1(); ?>
			</div>
		</div>
	</center>

</div>
