<?php
		$a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
		$i = date("Y") - $a;
		
		echo $_GET['txtNome'] . " é " . ($_GET['rdSexo'] == "1" ? "homem" : "mulher") . " e tem idade igual à $i anos. </h2></br></br>";
		
		if($i >= 18){
			$v = "o voto é obrigatório,";
			$d = "e pode dirigir.";
		}
		elseif($i >= 16 && $i < 18){
			$v = "o voto é opcional,";
			$d = "e não pode dirigir.";
		}
		else{
			$v = "não pode votar,";
			$d = "e não pode dirigir.";
		}
		echo "Com essa idade $v $d </br></br>";
?>
		<a href="calcula_idade.html">Voltar</a>