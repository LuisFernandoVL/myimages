<?php
	$conecta = pg_connect("host=localhost port=5432 dbname=myimages user=postgres password=postgres");
	if(!$conecta){
		echo "Não foi possivel conectar-se com o servidor";
		exit;
	}
?>