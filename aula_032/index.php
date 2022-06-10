

<?php

	// funcao recursiva para calcular fatorial de um numero
	function fator($valorx) {
		if ($valorx <= 1) {
			// caso o valor seja menor ou igual a 1 a funcao ira retornar o proprio valor 
			return $valorx;
		} else {
			// senao ela multiplicara o valor pelo retorno dela mesma so que dessa vez diminuindo 1 do nosso parametro
			return $valorx * fator($valorx -1);
		}
	}
	echo fator(5);

