<div class='container'>
	<h2>Crypt md5</h2>
	<form method='post'>
		<input type='text' class='form-control' placeholder="Your text" name='txt'><br>
		<input type='submit' class="btn btn-success" name='send'>
	</form>

	<?php
	if(isset($_POST['send'])){
		$text = htmlentities(trim(addslashes($_POST['txt'])));
		if($text !=''){
			$hashtext = md5($text);
			$db->query("INSERT INTO md5 VALUES ('','".$text."','".$hashtext."')");
			echo '<div class="alert alert-success">CRYPT : '.$hashtext.'</div>';
		}else{
			echo '<div class="alert alert-danger" style="width:25%;">No hash disponible :(</div>';
		}
	}

	?>
</div>