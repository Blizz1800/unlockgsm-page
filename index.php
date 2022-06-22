
<?php

	
	if( isset($_POST['PSSW'], $_POST['USER'])){
		$usr = $_POST['USER'];
		$pssw = $_POST['PSSW'];
		
		
	}


?>

<form method="POST" action="#">

	<input type="text" name="USER" placeholder="Usuario"/><br>
	<input type="password" name="PSSW" placeholder="Contraseña"/><br>
	<input type="submit" value="Iniciar Sesion"/>

</form>