<div class='container'>
	<h2>Decrypt md5</h2>
	<form method='post'>
		<input type='text' class='form-control' placeholder="Your hash" name='txt'><br>
		<input type='submit' class="btn btn-success" name='send'>
	</form>
	<?php
	if(isset($_POST['send'])){
		$text = htmlentities(trim(addslashes($_POST['txt'])));
		if($text !=''){
			$req = $db->query("SELECT * FROM md5 WHERE crypt = '$text' ");
			$sql = $req->fetch();
			if($sql['crypt'] !=''){
			echo '<div class="alert alert-success">DECRYPT : '.$sql['txt'].'</div>';
			}else{
			echo '<div class="alert alert-danger" style="width:25%;">No decrypt disponible :(</div>';
			}
	
		}else{
			echo '<div class="alert alert-danger" style="width:25%;">No decrypt disponible :(</div>';
		}
	}
	?>
</div>