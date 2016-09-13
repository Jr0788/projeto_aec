<?php
	$a = isset($_GET["mes"]) ? $_GET["mes"] : null;
	$b = isset($_GET["ano"]) ? $_GET["ano"] : null;
	$mes = "name";
	
	if($b != NULL){
		echo "<form><label for='ano'><h1><b>Ano: <u>$b</u></b></h1></br>";
	}else{
		echo "</br><h1>Favor digite um ano para pesquisa! </h1></br>";
	}
	if($a != null){
		$a = intval($a);
		$b = intval($b);
		if($a >= 1 && $a <= 12){
			switch($a){
				case 1:
					$mes = "Janeiro";
					break;
				case 2:
					$mes = "Fevereiro";
					break;
				case 3:
					$mes = "Março";
					break;
				case 4:
					$mes = "Abril";
					break;
				case 5:
					$mes = "Maio";
					break;
				case 6:
					$mes = "Junho";
					break;
				case 7:
					$mes = "Julho";
					break;
				case 8:
					$mes = "Agosto";
					break;
				case 9:
					$mes = "Setembro";
					break;
				case 10:
					$mes = "Outubro";
					break;
				case 11:
					$mes = "Novembro";
					break;
				case 12:
					$mes = "Dezembro";
					break;
			}
			echo "<form><label for='dias'><h1><b>Mês: <u>$mes</u></b></h1></br><select name='dias'>";
			
			/*Funcao para calcular os dias do mes*/
			$totDias = cal_days_in_month(CAL_GREGORIAN, $a, $b);
			echo "$totDias";
		
			for($x = 0; $x < $totDias; $x++){
				$valores = $x+1;
				echo "<option>$valores</option>";
			}
				echo "</select></form>";					
		}else{
			echo "<h1> Favor digitar um mês válido !!!</h1>";
		}
	}else{
		echo "<h1>Você preencheu o campo mes?</h1>";
	}
?>
</br></br>
<a href="calculo_mes.html">Voltar</a>