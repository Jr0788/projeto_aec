<?php
		$op = isset($_GET["calcular"]) ? $_GET["calcular"] : null;
        $x = isset($_GET["vlr1"]) ? $_GET["vlr1"] : null ;
		$y = isset($_GET["vlr2"]) ? $_GET["vlr2"] : null;
        
		echo "<h1>Você escolheu  $op para o cálculo: </h1>";
		
		//ADIÇÃO
		if($op == "adicao"){
            $z = $x+$y;
            echo "<h2>O resultado de $x  +  $y =  $z</h2>";
        }
		//SUBTRAÇÃO
        elseif($op == "subtracao"){
            $z = $x-$y;
            echo "<h2>O resultado de $x   -   $y  =  $z</h2>";
        }
		//MULTIPLICAÇÃO
        elseif($op == "multiplicacao"){   
			$z=$x*$y;
            echo "<h2>O resultado de $x  *  $y  =  $z</h2>";
        }
		//DIVISÃO
        elseif($op == "divisao"){    
            $z=$x/$y;
            echo "<h2>O resultado de $x  /  $y  =  $z</h2>";
        }  
		//RAIZ
		elseif($op == "raiz"){    
            $z= sqrt($x);
            echo "<h2>A Raiz de $x  =  $z</h2>";
        }
		//FATORIAL
		elseif($op == "fatorial"){    
            if($x == 0){
				$x = 1;
			}
			for($i = $x; $i > 1; $i--){
				$x = $x * ($i - 1);
			}
            echo "<h2>O fatorial do número é :  $x</h2>";
        }	
?>
	<a href="calculadora.html">Voltar</a>